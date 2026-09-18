<?php

namespace Tests\Unit;

use App\Models\Service;
use App\Services\ShoeRecommendationService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShoeRecommendationServiceTest extends TestCase
{
    use RefreshDatabase;

    protected ShoeRecommendationService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new ShoeRecommendationService();
    }

    /**
     * Test global feature vocabulary has exactly 19 features in correct order.
     */
    public function test_vocabulary_structure_and_weights(): void
    {
        $vocab = $this->service->getVocabulary();
        $this->assertCount(19, $vocab);

        // Check dimension slices
        $types = array_slice($vocab, 0, 6);
        $materials = array_slice($vocab, 6, 6);
        $issues = array_slice($vocab, 12, 7);

        foreach ($types as $item) {
            $this->assertEquals('type', $item['dimension']);
            $this->assertEquals(0.15, $item['weight']);
        }

        foreach ($materials as $item) {
            $this->assertEquals('material', $item['dimension']);
            $this->assertEquals(0.35, $item['weight']);
        }

        foreach ($issues as $item) {
            $this->assertEquals('issue', $item['dimension']);
            $this->assertEquals(0.50, $item['weight']);
        }
    }

    /**
     * Test binary vectorization and weighting calculation.
     */
    public function test_vectorization_and_weighting(): void
    {
        $userBinary = $this->service->vectorizeUserBinary('Sneakers', 'Canvas', ['Kotor Ringan/Debu', 'Jamur']);
        $this->assertCount(19, $userBinary);

        // Sneakers is at index 0
        $this->assertEquals(1, $userBinary[0]);
        // Boots is at index 1
        $this->assertEquals(0, $userBinary[1]);

        // Canvas is at index 6
        $this->assertEquals(1, $userBinary[6]);
        // Suede is at index 7
        $this->assertEquals(0, $userBinary[7]);

        // Kotor Ringan/Debu is at index 12
        $this->assertEquals(1, $userBinary[12]);
        // Jamur is at index 15
        $this->assertEquals(1, $userBinary[15]);

        $weighted = $this->service->applyWeights($userBinary);
        $this->assertEquals(0.15, $weighted[0]);
        $this->assertEquals(0.0, $weighted[1]);
        $this->assertEquals(0.35, $weighted[6]);
        $this->assertEquals(0.50, $weighted[12]);
        $this->assertEquals(0.50, $weighted[15]);
    }

    /**
     * Test perfect match gives cosine similarity of 1.0 (100%).
     */
    public function test_perfect_match_cosine_similarity(): void
    {
        $userVec = [0.15, 0, 0, 0, 0, 0, 0.35, 0, 0, 0, 0, 0, 0.50, 0, 0, 0, 0, 0, 0];
        $serviceVec = [0.15, 0, 0, 0, 0, 0, 0.35, 0, 0, 0, 0, 0, 0.50, 0, 0, 0, 0, 0, 0];

        $similarity = $this->service->calculateCosineSimilarity($userVec, $serviceVec);
        $this->assertEqualsWithDelta(1.0, $similarity, 0.0001);
    }

    /**
     * Test zero denominator protection returns 0.0.
     */
    public function test_zero_denominator_safe(): void
    {
        $zeroVec = array_fill(0, 19, 0.0);
        $anyVec = [0.15, 0, 0, 0, 0, 0, 0.35, 0, 0, 0, 0, 0, 0.50, 0, 0, 0, 0, 0, 0];

        $similarity1 = $this->service->calculateCosineSimilarity($zeroVec, $anyVec);
        $similarity2 = $this->service->calculateCosineSimilarity($zeroVec, $zeroVec);

        $this->assertEquals(0.0, $similarity1);
        $this->assertEquals(0.0, $similarity2);
    }

    /**
     * Test hard constraint: user material in unsuited_materials disqualifies service.
     */
    public function test_hard_constraint_unsuited_material(): void
    {
        $suedeService = new Service([
            'name' => 'Fast Clean',
            'is_active' => true,
            'unsuited_materials' => ['Suede', 'Nubuck'],
        ]);

        $this->assertFalse($this->service->passesHardConstraint($suedeService, 'Suede'));
        $this->assertFalse($this->service->passesHardConstraint($suedeService, 'Nubuck'));
        $this->assertTrue($this->service->passesHardConstraint($suedeService, 'Canvas'));
    }

    /**
     * Test inactive service is excluded by hard constraint.
     */
    public function test_inactive_service_excluded(): void
    {
        $inactive = new Service([
            'name' => 'Inactive Service',
            'is_active' => false,
            'unsuited_materials' => [],
        ]);

        $this->assertFalse($this->service->passesHardConstraint($inactive, 'Canvas'));
    }

    /**
     * Test threshold >= 0.40 is included and score < 0.40 is excluded.
     */
    public function test_threshold_filtering(): void
    {
        // Service A: High match (Sneakers, Canvas, Kotor Ringan/Debu)
        $serviceA = Service::create([
            'name' => 'High Match Service',
            'slug' => 'high-match',
            'description' => 'Test description',
            'price' => 50000,
            'estimated_days' => 2,
            'supported_types' => ['Sneakers'],
            'supported_materials' => ['Canvas'],
            'unsuited_materials' => [],
            'target_issues' => ['Kotor Ringan/Debu'],
            'is_active' => true,
        ]);

        // Service B: Low match (Loafers, Genuine Leather, Warna Pudar/Repaint - completely orthogonal to user input)
        $serviceB = Service::create([
            'name' => 'Low Match Service',
            'slug' => 'low-match',
            'description' => 'Test description',
            'price' => 150000,
            'estimated_days' => 5,
            'supported_types' => ['Loafers'],
            'supported_materials' => ['Genuine Leather'],
            'unsuited_materials' => [],
            'target_issues' => ['Warna Pudar/Repaint'],
            'is_active' => true,
        ]);

        $result = $this->service->recommend('Sneakers', 'Canvas', ['Kotor Ringan/Debu']);

        $slugs = array_column($result['recommendations'], 'slug');
        $this->assertContains('high-match', $slugs);
        $this->assertNotContains('low-match', $slugs);
    }

    /**
     * Test empty result returns fallback message for special consultation.
     */
    public function test_empty_result_fallback(): void
    {
        // No services created or non-matching input
        $result = $this->service->recommend('Boots', 'Genuine Leather', ['Jamur'], collect([]));

        $this->assertFalse($result['has_recommendations']);
        $this->assertEmpty($result['recommendations']);
        $this->assertNotNull($result['fallback_message']);
        $this->assertStringContainsString('Layanan Konsultasi Khusus', $result['fallback_message']);
    }

    /**
     * Test multi-issue matching properly calculates cosine vector.
     */
    public function test_multi_issue_matching(): void
    {
        $multiService = Service::create([
            'name' => 'Complete Restoration',
            'slug' => 'complete-restoration',
            'description' => 'Multi issue handling',
            'price' => 130000,
            'estimated_days' => 5,
            'supported_types' => ['Sneakers'],
            'supported_materials' => ['Canvas'],
            'unsuited_materials' => [],
            'target_issues' => ['Lumpur/Kotor Membandel', 'Bau/Bakteri'],
            'is_active' => true,
        ]);

        $result = $this->service->recommend('Sneakers', 'Canvas', ['Lumpur/Kotor Membandel', 'Bau/Bakteri']);

        $this->assertTrue($result['has_recommendations']);
        $top = $result['recommendations'][0];
        $this->assertEquals('complete-restoration', $top['slug']);
        $this->assertGreaterThanOrEqual(0.80, $top['score']);
        $this->assertEquals('green', $top['badge_color']);
    }

    /**
     * Test deterministic tie-breaking: score desc -> price asc -> id asc.
     */
    public function test_deterministic_tie_breaking(): void
    {
        // Create two services with IDENTICAL score for the user input
        // Both match Sneakers and Canvas and Kotor Ringan/Debu
        $serviceExpensive = Service::create([
            'name' => 'Service Expensive',
            'slug' => 'service-expensive',
            'description' => 'Test',
            'price' => 100000,
            'estimated_days' => 2,
            'supported_types' => ['Sneakers'],
            'supported_materials' => ['Canvas'],
            'unsuited_materials' => [],
            'target_issues' => ['Kotor Ringan/Debu'],
            'is_active' => true,
        ]);

        $serviceCheap = Service::create([
            'name' => 'Service Cheap',
            'slug' => 'service-cheap',
            'description' => 'Test',
            'price' => 30000,
            'estimated_days' => 2,
            'supported_types' => ['Sneakers'],
            'supported_materials' => ['Canvas'],
            'unsuited_materials' => [],
            'target_issues' => ['Kotor Ringan/Debu'],
            'is_active' => true,
        ]);

        $result = $this->service->recommend('Sneakers', 'Canvas', ['Kotor Ringan/Debu']);

        $recs = $result['recommendations'];
        $this->assertGreaterThanOrEqual(2, count($recs));

        // Equal similarity score -> cheaper service MUST appear first
        $this->assertEquals('service-cheap', $recs[0]['slug']);
        $this->assertEquals('service-expensive', $recs[1]['slug']);
    }
}
