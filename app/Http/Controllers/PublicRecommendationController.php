<?php

namespace App\Http\Controllers;

use App\Models\RecommendationLog;
use App\Models\Service;
use App\Services\ShoeRecommendationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Throwable;

class PublicRecommendationController extends Controller
{
    protected ShoeRecommendationService $recommendationService;

    public function __construct(ShoeRecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    /**
     * Display the landing page with the interactive diagnostic recommendation form.
     */
    public function index(): View
    {
        $types = ShoeRecommendationService::TYPES;
        $materials = ShoeRecommendationService::MATERIALS;
        $issues = ShoeRecommendationService::ISSUES;
        $services = Service::active()->orderBy('price', 'asc')->get();
        $whatsappNumber = config('app.whatsapp_number', config('services.whatsapp.number', env('WHATSAPP_NUMBER', '6285810993812')));

        return view('public.index', compact(
            'types',
            'materials',
            'issues',
            'services',
            'whatsappNumber'
        ));
    }

    /**
     * Process recommendation request via Fetch API.
     */
    public function recommend(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'shoe_type' => ['required', 'string', Rule::in(ShoeRecommendationService::TYPES)],
            'material' => ['required', 'string', Rule::in(ShoeRecommendationService::MATERIALS)],
            'issues' => ['required', 'array', 'min:1'],
            'issues.*' => ['required', 'string', Rule::in(ShoeRecommendationService::ISSUES), 'distinct'],
        ], [
            'shoe_type.required' => 'Silakan pilih tipe sepatu Anda.',
            'shoe_type.in' => 'Tipe sepatu yang dipilih tidak valid.',
            'material.required' => 'Silakan pilih bahan sepatu Anda.',
            'material.in' => 'Bahan sepatu yang dipilih tidak valid.',
            'issues.required' => 'Pilih minimal satu keluhan atau kebutuhan perawatan sepatu.',
            'issues.array' => 'Format keluhan harus berupa array.',
            'issues.min' => 'Pilih minimal satu keluhan perawatan sepatu.',
            'issues.*.in' => 'Salah satu masalah yang dipilih tidak valid.',
        ]);

        $result = $this->recommendationService->recommend(
            $validated['shoe_type'],
            $validated['material'],
            $validated['issues']
        );

        // Failsafe recommendation logging
        try {
            RecommendationLog::create([
                'session_id' => $request->session()->getId(),
                'shoe_type' => $validated['shoe_type'],
                'material' => $validated['material'],
                'issues' => $validated['issues'],
                'results' => array_map(function ($item) {
                    return [
                        'service_id' => $item['service_id'],
                        'name' => $item['name'],
                        'score' => $item['score'],
                        'percentage' => $item['percentage'],
                        'price' => $item['price'],
                    ];
                }, $result['recommendations']),
            ]);
        } catch (Throwable $e) {
            // Logging failure must never prevent recommendation output
            report($e);
        }

        $whatsappNumber = config('app.whatsapp_number', config('services.whatsapp.number', env('WHATSAPP_NUMBER', '6285810993812')));

        return response()->json([
            'success' => true,
            'data' => $result['recommendations'],
            'total' => count($result['recommendations']),
            'has_recommendations' => $result['has_recommendations'],
            'fallback_message' => $result['fallback_message'],
            'user_input' => [
                'shoe_type' => $validated['shoe_type'],
                'material' => $validated['material'],
                'issues' => $validated['issues'],
            ],
            'whatsapp_number' => $whatsappNumber,
        ]);
    }
}
