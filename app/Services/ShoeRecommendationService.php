<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Collection;

class ShoeRecommendationService
{
    /**
     * Dimension weights (total = 1.00)
     */
    public const WEIGHT_TYPE = 0.15;
    public const WEIGHT_MATERIAL = 0.35;
    public const WEIGHT_ISSUE = 0.50;

    /**
     * Minimum cosine similarity threshold (40%)
     */
    public const SIMILARITY_THRESHOLD = 0.40;

    /**
     * Dimension A: Tipe Sepatu
     */
    public const TYPES = [
        'Sneakers',
        'Boots',
        'Loafers',
        'Slip-on',
        'Canvas Shoes',
        'Sports',
    ];

    /**
     * Dimension B: Bahan Sepatu
     */
    public const MATERIALS = [
        'Canvas',
        'Suede',
        'Nubuck',
        'Genuine Leather',
        'Synthetic',
        'Mesh/Knit',
    ];

    /**
     * Dimension C: Masalah / Kebutuhan Perawatan
     */
    public const ISSUES = [
        'Kotor Ringan/Debu',
        'Lumpur/Kotor Membandel',
        'Bau/Bakteri',
        'Jamur',
        'Midsole Menguning',
        'Warna Pudar/Repaint',
        'Sol Mengelupas/Reglue',
    ];

    /**
     * Global Feature Vocabulary with ordered keys and corresponding dimension weights.
     *
     * @var array<int, array{key: string, dimension: string, weight: float}>
     */
    protected array $vocabulary = [];

    public function __construct()
    {
        $this->buildVocabulary();
    }

    /**
     * Initialize deterministic 19-dimensional feature vocabulary.
     */
    protected function buildVocabulary(): void
    {
        $this->vocabulary = [];

        foreach (self::TYPES as $type) {
            $this->vocabulary[] = [
                'key' => 'type_' . $type,
                'name' => $type,
                'dimension' => 'type',
                'weight' => self::WEIGHT_TYPE,
            ];
        }

        foreach (self::MATERIALS as $material) {
            $this->vocabulary[] = [
                'key' => 'mat_' . $material,
                'name' => $material,
                'dimension' => 'material',
                'weight' => self::WEIGHT_MATERIAL,
            ];
        }

        foreach (self::ISSUES as $issue) {
            $this->vocabulary[] = [
                'key' => 'issue_' . $issue,
                'name' => $issue,
                'dimension' => 'issue',
                'weight' => self::WEIGHT_ISSUE,
            ];
        }
    }

    /**
     * Get the defined vocabulary.
     *
     * @return array<int, array{key: string, name: string, dimension: string, weight: float}>
     */
    public function getVocabulary(): array
    {
        return $this->vocabulary;
    }

    /**
     * Convert user selections into binary vector (19 dimensions).
     *
     * @param string $shoeType
     * @param string $material
     * @param array<string> $issues
     * @return array<int, int>
     */
    public function vectorizeUserBinary(string $shoeType, string $material, array $issues): array
    {
        $vector = [];

        foreach ($this->vocabulary as $feature) {
            $val = 0;
            if ($feature['dimension'] === 'type' && $feature['name'] === $shoeType) {
                $val = 1;
            } elseif ($feature['dimension'] === 'material' && $feature['name'] === $material) {
                $val = 1;
            } elseif ($feature['dimension'] === 'issue' && in_array($feature['name'], $issues, true)) {
                $val = 1;
            }
            $vector[] = $val;
        }

        return $vector;
    }

    /**
     * Convert service entity into binary vector (19 dimensions).
     *
     * @param Service $service
     * @return array<int, int>
     */
    public function vectorizeServiceBinary(Service $service): array
    {
        $types = (array) ($service->supported_types ?? []);
        $materials = (array) ($service->supported_materials ?? []);
        $targetIssues = (array) ($service->target_issues ?? []);

        $vector = [];

        foreach ($this->vocabulary as $feature) {
            $val = 0;
            if ($feature['dimension'] === 'type' && in_array($feature['name'], $types, true)) {
                $val = 1;
            } elseif ($feature['dimension'] === 'material' && in_array($feature['name'], $materials, true)) {
                $val = 1;
            } elseif ($feature['dimension'] === 'issue' && in_array($feature['name'], $targetIssues, true)) {
                $val = 1;
            }
            $vector[] = $val;
        }

        return $vector;
    }

    /**
     * Apply dimension weights: V_i = X_i * W_dimension.
     *
     * @param array<int, int> $binaryVector
     * @return array<int, float>
     */
    public function applyWeights(array $binaryVector): array
    {
        $weighted = [];
        foreach ($binaryVector as $index => $val) {
            $weight = $this->vocabulary[$index]['weight'];
            $weighted[] = (float) ($val * $weight);
        }
        return $weighted;
    }

    /**
     * Check if a service passes hard constraint filtering.
     *
     * Disqualified if:
     * 1. Service is inactive (is_active == false).
     * 2. User's material is listed in unsuited_materials of the service.
     *
     * @param Service $service
     * @param string $userMaterial
     * @return bool True if qualified, false if disqualified.
     */
    public function passesHardConstraint(Service $service, string $userMaterial): bool
    {
        if (!$service->is_active) {
            return false;
        }

        $unsuited = (array) ($service->unsuited_materials ?? []);
        if (!empty($unsuited) && in_array($userMaterial, $unsuited, true)) {
            return false;
        }

        return true;
    }

    /**
     * Compute Cosine Similarity between two weighted vectors.
     * Formula: Cosine = Σ(U_i * S_i) / (sqrt(Σ(U_i^2)) * sqrt(Σ(S_i^2)))
     * Division by zero protection: returns 0.0 if denominator is 0.
     *
     * @param array<int, float> $userWeighted
     * @param array<int, float> $serviceWeighted
     * @return float Cosine similarity score [0.0 - 1.0]
     */
    public function calculateCosineSimilarity(array $userWeighted, array $serviceWeighted): float
    {
        $dotProduct = 0.0;
        $normUserSq = 0.0;
        $normServiceSq = 0.0;

        $length = count($this->vocabulary);
        for ($i = 0; $i < $length; $i++) {
            $u = $userWeighted[$i] ?? 0.0;
            $s = $serviceWeighted[$i] ?? 0.0;

            $dotProduct += ($u * $s);
            $normUserSq += ($u * $u);
            $normServiceSq += ($s * $s);
        }

        $denominator = sqrt($normUserSq) * sqrt($normServiceSq);

        if ($denominator <= 1e-9) {
            return 0.0;
        }

        $similarity = $dotProduct / $denominator;

        // Ensure numerical stability within [0.0, 1.0]
        return (float) max(0.0, min(1.0, $similarity));
    }

    /**
     * Determine badge color category based on percentage score.
     * >= 80% -> green
     * >= 60% -> blue
     * >= 40% -> yellow
     *
     * @param float $percentage
     * @return string
     */
    public static function getBadgeColor(float $percentage): string
    {
        if ($percentage >= 80.0) {
            return 'green';
        }
        if ($percentage >= 60.0) {
            return 'blue';
        }
        return 'yellow';
    }

    /**
     * Execute full Content-Based Filtering recommendation pipeline.
     *
     * @param string $shoeType
     * @param string $material
     * @param array<string> $issues
     * @param Collection<int, Service>|null $services Optional collection for test injection
     * @return array{
     *   recommendations: array,
     *   total_candidates: int,
     *   qualified_candidates: int,
     *   has_recommendations: bool,
     *   user_vector: array,
     *   fallback_message: string|null
     * }
     */
    public function recommend(string $shoeType, string $material, array $issues, ?Collection $services = null): array
    {
        // 1. Vectorize User Profile
        $userBinary = $this->vectorizeUserBinary($shoeType, $material, $issues);
        $userWeighted = $this->applyWeights($userBinary);

        // 2. Fetch Services
        $allServices = $services ?? Service::active()->get();
        $totalCandidates = $allServices->count();

        $scoredCandidates = [];
        $qualifiedCount = 0;

        foreach ($allServices as $service) {
            // 3. Hard Constraint Filtering
            if (!$this->passesHardConstraint($service, $material)) {
                continue;
            }

            $qualifiedCount++;

            // 4. Vectorize Service Profile
            $serviceBinary = $this->vectorizeServiceBinary($service);
            $serviceWeighted = $this->applyWeights($serviceBinary);

            // 5. Calculate Cosine Similarity
            $similarity = $this->calculateCosineSimilarity($userWeighted, $serviceWeighted);

            // 6. Threshold Filtering (score >= 0.40)
            if ($similarity >= self::SIMILARITY_THRESHOLD) {
                $percentage = round($similarity * 100, 1);

                $scoredCandidates[] = [
                    'service' => $service,
                    'service_id' => $service->id,
                    'name' => $service->name,
                    'slug' => $service->slug,
                    'description' => $service->description,
                    'price' => (float) $service->price,
                    'formatted_price' => 'Rp ' . number_format($service->price, 0, ',', '.'),
                    'estimated_days' => $service->estimated_days,
                    'image_url' => $service->image_url,
                    'score' => round($similarity, 4),
                    'percentage' => $percentage,
                    'badge_color' => self::getBadgeColor($percentage),
                    'supported_types' => $service->supported_types,
                    'supported_materials' => $service->supported_materials,
                    'target_issues' => $service->target_issues,
                ];
            }
        }

        // 7. Deterministic Tie-Breaking Ranking:
        //    score desc, then price asc, then id asc
        usort($scoredCandidates, function ($a, $b) {
            // 1. Score descending
            if ($b['score'] > $a['score']) {
                return 1;
            }
            if ($b['score'] < $a['score']) {
                return -1;
            }

            // 2. Price ascending
            if ($a['price'] < $b['price']) {
                return -1;
            }
            if ($a['price'] > $b['price']) {
                return 1;
            }

            // 3. ID ascending
            return $a['service_id'] <=> $b['service_id'];
        });

        $hasRecommendations = count($scoredCandidates) > 0;

        return [
            'recommendations' => $scoredCandidates,
            'total_candidates' => $totalCandidates,
            'qualified_candidates' => $qualifiedCount,
            'has_recommendations' => $hasRecommendations,
            'user_vector' => [
                'type' => $shoeType,
                'material' => $material,
                'issues' => $issues,
                'weights' => [
                    'type' => self::WEIGHT_TYPE,
                    'material' => self::WEIGHT_MATERIAL,
                    'issue' => self::WEIGHT_ISSUE,
                ],
            ],
            'fallback_message' => $hasRecommendations
                ? null
                : 'Belum ditemukan layanan yang memenuhi tingkat kecocokan minimum 40%. Silakan gunakan Layanan Konsultasi Khusus untuk kebutuhan perawatan sepatu Anda.',
        ];
    }
}
