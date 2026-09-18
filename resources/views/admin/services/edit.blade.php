@extends('layouts.admin')

@section('title', 'Edit Service: ' . $service->name . ' - SOLECRAFT Admin')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Edit Service: {{ $service->name }}</h1>
            <p class="text-sm text-slate-500">Update pricing, description, turnaround time, or CBF vector parameters.</p>
        </div>
        <a href="{{ route('admin.services.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900">
            &larr; Back to List
        </a>
    </div>

    <!-- Edit Form -->
    <form action="{{ route('admin.services.update', $service) }}" method="POST" class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-sm space-y-8">
        @csrf
        @method('PUT')

        <!-- Basic Details -->
        <div class="space-y-4">
            <h3 class="text-base font-bold text-slate-900 border-b border-slate-200 pb-2">General Service Information</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                        Service Name <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name', $service->name) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    >
                </div>

                <div>
                    <label for="slug" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                        URL Slug <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{ old('slug', $service->slug) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    >
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="price" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                        Service Price (Rp) <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="number"
                        step="1000"
                        name="price"
                        id="price"
                        value="{{ old('price', (int)$service->price) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    >
                </div>

                <div>
                    <label for="estimated_days" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                        Estimated Turnaround (Days) <span class="text-rose-500">*</span>
                    </label>
                    <input
                        type="number"
                        name="estimated_days"
                        id="estimated_days"
                        value="{{ old('estimated_days', $service->estimated_days) }}"
                        min="1"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    >
                </div>
            </div>

            <div>
                <label for="description" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                    Full Description <span class="text-rose-500">*</span>
                </label>
                <textarea
                    name="description"
                    id="description"
                    rows="3"
                    required
                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >{{ old('description', $service->description) }}</textarea>
            </div>

            <div>
                <label for="image_url" class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1">
                    Image URL (Optional)
                </label>
                <input
                    type="url"
                    name="image_url"
                    id="image_url"
                    value="{{ old('image_url', $service->image_url) }}"
                    class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>
        </div>

        <!-- Dimension A: Supported Types -->
        @php
            $selectedTypes = old('supported_types', (array) $service->supported_types);
            $selectedMaterials = old('supported_materials', (array) $service->supported_materials);
            $selectedUnsuited = old('unsuited_materials', (array) ($service->unsuited_materials ?? []));
            $selectedIssues = old('target_issues', (array) $service->target_issues);
            $issueLabels = [
                'Kotor Ringan/Debu' => 'Light Dirt / Dust',
                'Lumpur/Kotor Membandel' => 'Mud / Stubborn Stains',
                'Bau/Bakteri' => 'Odor / Bacteria',
                'Jamur' => 'Mold & Mildew',
                'Midsole Menguning' => 'Yellowing Midsole',
                'Warna Pudar/Repaint' => 'Faded Color / Repaint',
                'Sol Mengelupas/Reglue' => 'Sole Separation / Reglue',
            ];
        @endphp

        <div class="space-y-3">
            <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                <h3 class="text-base font-bold text-slate-900">Dimension A: Supported Shoe Types (Weight: 15%)</h3>
                <span class="text-xs text-rose-500 font-semibold">*Select at least 1</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                @foreach($types as $type)
                    <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer text-xs font-medium text-slate-800">
                        <input
                            type="checkbox"
                            name="supported_types[]"
                            value="{{ $type }}"
                            {{ in_array($type, $selectedTypes) ? 'checked' : '' }}
                            class="w-4 h-4 rounded text-indigo-600 border-slate-300 focus:ring-indigo-500"
                        >
                        <span>{{ $type }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Dimension B: Supported Materials -->
        <div class="space-y-3">
            <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                <h3 class="text-base font-bold text-slate-900">Dimension B: Supported Materials (Weight: 35%)</h3>
                <span class="text-xs text-rose-500 font-semibold">*Select at least 1</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                @foreach($materials as $mat)
                    <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer text-xs font-medium text-slate-800">
                        <input
                            type="checkbox"
                            name="supported_materials[]"
                            value="{{ $mat }}"
                            {{ in_array($mat, $selectedMaterials) ? 'checked' : '' }}
                            class="w-4 h-4 rounded text-indigo-600 border-slate-300 focus:ring-indigo-500"
                        >
                        <span>{{ $mat }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Hard Constraint: Unsuited Materials -->
        <div class="space-y-3">
            <div class="flex items-center justify-between border-b border-rose-200 pb-2">
                <div>
                    <h3 class="text-base font-bold text-rose-900">Hard Constraint: Restricted Materials (Safety Filter)</h3>
                    <p class="text-xs text-slate-500">If selected, shoes with this material will NEVER be recommended this service.</p>
                </div>
                <span class="text-xs text-slate-400">Optional</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                @foreach($materials as $mat)
                    <label class="flex items-center gap-2 p-3 rounded-xl border border-rose-100 bg-rose-50/40 hover:bg-rose-50 cursor-pointer text-xs font-medium text-rose-900">
                        <input
                            type="checkbox"
                            name="unsuited_materials[]"
                            value="{{ $mat }}"
                            {{ in_array($mat, $selectedUnsuited) ? 'checked' : '' }}
                            class="w-4 h-4 rounded text-rose-600 border-rose-300 focus:ring-rose-500"
                        >
                        <span>&cross; {{ $mat }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Dimension C: Target Issues -->
        <div class="space-y-3">
            <div class="flex items-center justify-between border-b border-slate-200 pb-2">
                <h3 class="text-base font-bold text-slate-900">Dimension C: Target Conditions / Solutions (Weight: 50%)</h3>
                <span class="text-xs text-rose-500 font-semibold">*Select at least 1</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @foreach($issues as $iss)
                    <label class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer text-xs font-medium text-slate-800">
                        <input
                            type="checkbox"
                            name="target_issues[]"
                            value="{{ $iss }}"
                            {{ in_array($iss, $selectedIssues) ? 'checked' : '' }}
                            class="w-4 h-4 rounded text-indigo-600 border-slate-300 focus:ring-indigo-500"
                        >
                        <span>{{ $issueLabels[$iss] ?? $iss }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Status Active -->
        <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
            <div>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $service->is_active) ? 'checked' : '' }}
                        class="w-5 h-5 rounded text-indigo-600 border-slate-300 focus:ring-indigo-500"
                    >
                    <div>
                        <span class="text-sm font-bold text-slate-800">Active Service Status</span>
                        <p class="text-xs text-slate-500">Service will only appear in recommendation results when active.</p>
                    </div>
                </label>
            </div>

            <button type="submit" class="px-6 py-3 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-md hover:shadow-lg transition-all">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
