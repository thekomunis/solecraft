<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\ShoeRecommendationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index(Request $request): View
    {
        $query = Service::query()->latest();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->input('status') === 'active') {
                $query->where('is_active', true);
            } elseif ($request->input('status') === 'inactive') {
                $query->where('is_active', false);
            }
        }

        $services = $query->paginate(10)->withQueryString();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create(): View
    {
        $types = ShoeRecommendationService::TYPES;
        $materials = ShoeRecommendationService::MATERIALS;
        $issues = ShoeRecommendationService::ISSUES;

        return view('admin.services.create', compact('types', 'materials', 'issues'));
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $types = ShoeRecommendationService::TYPES;
        $materials = ShoeRecommendationService::MATERIALS;
        $issues = ShoeRecommendationService::ISSUES;

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:services,slug'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'estimated_days' => ['required', 'integer', 'min:1'],
            'image_url' => ['nullable', 'url', 'max:500'],
            'supported_types' => ['required', 'array', 'min:1'],
            'supported_types.*' => ['string', Rule::in($types)],
            'supported_materials' => ['required', 'array', 'min:1'],
            'supported_materials.*' => ['string', Rule::in($materials)],
            'unsuited_materials' => ['nullable', 'array'],
            'unsuited_materials.*' => ['string', Rule::in($materials)],
            'target_issues' => ['required', 'array', 'min:1'],
            'target_issues.*' => ['string', Rule::in($issues)],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['slug'] = !empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);

        // Check if slug collisions occur
        $originalSlug = $validated['slug'];
        $count = 1;
        while (Service::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = "{$originalSlug}-{$count}";
            $count++;
        }

        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['unsuited_materials'] = $validated['unsuited_materials'] ?? [];

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', "Layanan '{$validated['name']}' berhasil ditambahkan.");
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service): View
    {
        $types = ShoeRecommendationService::TYPES;
        $materials = ShoeRecommendationService::MATERIALS;
        $issues = ShoeRecommendationService::ISSUES;

        return view('admin.services.edit', compact('service', 'types', 'materials', 'issues'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $types = ShoeRecommendationService::TYPES;
        $materials = ShoeRecommendationService::MATERIALS;
        $issues = ShoeRecommendationService::ISSUES;

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('services')->ignore($service->id)],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'estimated_days' => ['required', 'integer', 'min:1'],
            'image_url' => ['nullable', 'url', 'max:500'],
            'supported_types' => ['required', 'array', 'min:1'],
            'supported_types.*' => ['string', Rule::in($types)],
            'supported_materials' => ['required', 'array', 'min:1'],
            'supported_materials.*' => ['string', Rule::in($materials)],
            'unsuited_materials' => ['nullable', 'array'],
            'unsuited_materials.*' => ['string', Rule::in($materials)],
            'target_issues' => ['required', 'array', 'min:1'],
            'target_issues.*' => ['string', Rule::in($issues)],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['slug'] = Str::slug($validated['slug']);
        $validated['is_active'] = $request->boolean('is_active', false);
        $validated['unsuited_materials'] = $validated['unsuited_materials'] ?? [];

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', "Layanan '{$service->name}' berhasil diperbarui.");
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service): RedirectResponse
    {
        $name = $service->name;
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', "Layanan '{$name}' telah dihapus.");
    }
}
