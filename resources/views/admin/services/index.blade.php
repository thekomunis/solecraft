@extends('layouts.admin')

@section('title', 'Services Catalog - SOLECRAFT Admin')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Shoe Services Catalog<span class="sr-only">Katalog Layanan Sepatu</span></h1>
            <p class="text-sm text-slate-500">Manage service catalog master data and cleaning treatments for the recommendation engine.</p>
        </div>

        <a href="{{ route('admin.services.create') }}" class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 rounded-xl shadow-sm hover:shadow transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Add New Service</span>
        </a>
    </div>

    <!-- Filters & Search Bar -->
    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm">
        <form method="GET" action="{{ route('admin.services.index') }}" class="flex flex-col sm:flex-row items-center gap-3">
            <div class="relative flex-grow w-full">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search by service name or description..."
                    class="w-full pl-10 pr-4 py-2 text-sm rounded-xl border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >
                <div class="absolute left-3 top-2.5 text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="flex items-center gap-2 w-full sm:w-auto">
                <select name="status" class="w-full sm:w-40 py-2 px-3 text-sm rounded-xl border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>

                <button type="submit" class="px-4 py-2 text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-xl transition-colors">
                    Filter
                </button>

                @if(request('search') || request('status'))
                    <a href="{{ route('admin.services.index') }}" class="px-3 py-2 text-xs text-rose-600 hover:text-rose-800 font-medium">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Services Table -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider text-[11px]">
                    <tr>
                        <th class="px-6 py-4">Service &amp; Price</th>
                        <th class="px-6 py-4">Supported Types</th>
                        <th class="px-6 py-4">Shoe Materials</th>
                        <th class="px-6 py-4">Restricted Materials (Safety)</th>
                        <th class="px-6 py-4">Target Conditions</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($services as $service)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="px-6 py-4">
                                <div class="font-bold text-slate-900 text-sm mb-1">{{ $service->name }}</div>
                                <div class="text-[11px] text-slate-400 font-mono mb-2">/{{ $service->slug }}</div>
                                <div class="flex items-center gap-2 text-xs">
                                    <span class="font-extrabold text-indigo-600">
                                        Rp {{ number_format($service->price, 0, ',', '.') }}
                                    </span>
                                    <span class="text-slate-400">&bull;</span>
                                    <span class="text-slate-500">{{ $service->estimated_days }} Business Days</span>
                                </div>
                            </td>

                            <!-- Supported Types -->
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-1 max-w-xs">
                                    @foreach((array) $service->supported_types as $type)
                                        <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700 text-[10px] font-medium">
                                            {{ $type }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <!-- Supported Materials -->
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-1 max-w-xs">
                                    @foreach((array) $service->supported_materials as $mat)
                                        <span class="px-2 py-0.5 rounded bg-indigo-50 text-indigo-700 border border-indigo-100 text-[10px] font-medium">
                                            {{ $mat }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <!-- Unsuited Materials (Hard Constraint) -->
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-1 max-w-xs">
                                    @if(!empty($service->unsuited_materials))
                                        @foreach((array) $service->unsuited_materials as $unsuited)
                                            <span class="px-2 py-0.5 rounded bg-rose-50 text-rose-700 border border-rose-200 text-[10px] font-bold">
                                                &cross; {{ $unsuited }}
                                            </span>
                                        @endforeach
                                    @else
                                        <span class="text-[11px] text-slate-400 italic">No restrictions</span>
                                    @endif
                                </div>
                            </td>

                            <!-- Target Issues -->
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-1 max-w-xs">
                                    @foreach((array) $service->target_issues as $iss)
                                        <span class="px-2 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-200 text-[10px] font-medium">
                                            {{ $iss }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <!-- Status Active -->
                            <td class="px-6 py-4 text-center">
                                @if($service->is_active)
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                        Active
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 text-slate-600 border border-slate-200">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.services.edit', $service) }}" class="p-2 text-indigo-600 hover:text-indigo-900 hover:bg-indigo-50 rounded-lg transition-colors" title="Edit Service">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete service \'{{ $service->name }}\'?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-rose-600 hover:text-rose-900 hover:bg-rose-50 rounded-lg transition-colors" title="Delete Service">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-slate-400">
                                No services found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($services->hasPages())
            <div class="px-6 py-4 border-t border-slate-200">
                {{ $services->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
