<?php

namespace Tests\Feature;

use App\Models\RecommendationLog;
use App\Models\Service;
use Database\Seeders\ServiceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecommendationApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(ServiceSeeder::class);
    }

    /**
     * Test GET / and /rekomendasi render landing page successfully.
     */
    public function test_landing_page_renders(): void
    {
        $getHome = $this->get('/');
        $getHome->assertStatus(200)
            ->assertSee('SOLECRAFT');

        $getReco = $this->get('/rekomendasi');
        $getReco->assertStatus(200);

        $response = $this->postJson('/rekomendasi', [
            'shoe_type' => 'Sneakers',
            'material' => 'Canvas',
            'issues' => ['Kotor Ringan/Debu'],
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'has_recommendations' => true,
            ])
            ->assertJsonStructure([
                'success',
                'data' => [
                    '*' => [
                        'service_id',
                        'name',
                        'slug',
                        'price',
                        'formatted_price',
                        'estimated_days',
                        'score',
                        'percentage',
                        'badge_color',
                    ],
                ],
                'total',
                'has_recommendations',
                'fallback_message',
                'user_input' => [
                    'shoe_type',
                    'material',
                    'issues',
                ],
                'whatsapp_number',
            ]);

        $this->assertDatabaseHas('recommendation_logs', [
            'shoe_type' => 'Sneakers',
            'material' => 'Canvas',
        ]);
    }

    /**
     * Test validation fails when input is invalid or missing.
     */
    public function test_validation_errors_on_invalid_input(): void
    {
        // Missing all fields
        $response = $this->postJson('/rekomendasi', []);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['shoe_type', 'material', 'issues']);

        // Invalid values
        $response = $this->postJson('/rekomendasi', [
            'shoe_type' => 'High Heels', // Not allowed
            'material' => 'Plastic',    // Not allowed
            'issues' => ['Tali Putus'], // Not allowed
        ]);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['shoe_type', 'material', 'issues.0']);

        // Empty issues array
        $response = $this->postJson('/rekomendasi', [
            'shoe_type' => 'Sneakers',
            'material' => 'Canvas',
            'issues' => [],
        ]);
        $response->assertStatus(422)
            ->assertJsonValidationErrors(['issues']);
    }

    /**
     * Test hard constraint: Suede input disallows Fast Clean and Deep Clean Standard.
     */
    public function test_hard_constraint_excludes_unsuited_materials(): void
    {
        $response = $this->postJson('/rekomendasi', [
            'shoe_type' => 'Sneakers',
            'material' => 'Suede',
            'issues' => ['Kotor Ringan/Debu'],
        ]);

        $response->assertStatus(200);
        $data = $response->json('data');
        $slugs = array_column($data, 'slug');

        // Services unsuited for Suede: regular-shoes-dark, vans-checkerboard-care, etc.
        $this->assertNotContains('regular-shoes-dark', $slugs);
        $this->assertNotContains('vans-checkerboard-care', $slugs);

        // Suede & Nubuck Care Treatment should be recommended
        $this->assertContains('suede-care-treatment', $slugs);
    }
}
