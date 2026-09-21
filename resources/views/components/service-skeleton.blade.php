@props([
    'count' => 6,
    'class' => 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6'
])

{{-- Skeleton Loader for Service Catalog Cards --}}
<div {{ $attributes->merge(['class' => $class]) }} id="service-skeleton-container" aria-hidden="true">
    @for($i = 0; $i < $count; $i++)
        <div class="skeleton-card bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-2xs flex flex-col justify-between h-[360px] animate-pulse">
            <!-- Top Row: Category Badge & Icon Placeholder -->
            <div>
                <div class="flex items-center justify-between gap-3 mb-4">
                    <div class="h-6 w-24 bg-slate-200 rounded-full"></div>
                    <div class="w-8 h-8 rounded-lg bg-slate-100 shrink-0"></div>
                </div>

                <!-- Title Placeholders -->
                <div class="space-y-2 mb-3">
                    <div class="h-5 w-4/5 bg-slate-200 rounded-md"></div>
                    <div class="h-5 w-2/3 bg-slate-200/80 rounded-md"></div>
                </div>

                <!-- Description Placeholders -->
                <div class="space-y-2 mt-4">
                    <div class="h-3.5 w-full bg-slate-100 rounded"></div>
                    <div class="h-3.5 w-11/12 bg-slate-100 rounded"></div>
                    <div class="h-3.5 w-4/5 bg-slate-100 rounded"></div>
                </div>

                <!-- Tags / Material Placeholders -->
                <div class="flex flex-wrap gap-1.5 mt-5">
                    <div class="h-5 w-14 bg-slate-100 rounded"></div>
                    <div class="h-5 w-16 bg-slate-100 rounded"></div>
                    <div class="h-5 w-12 bg-slate-100 rounded"></div>
                </div>
            </div>

            <!-- Bottom Area: Price & CTA Button -->
            <div class="pt-5 border-t border-slate-100 mt-auto">
                <div class="flex items-end justify-between gap-3 mb-3.5">
                    <div>
                        <div class="h-3 w-16 bg-slate-100 rounded mb-1.5"></div>
                        <div class="h-6 w-28 bg-slate-200 rounded-md"></div>
                    </div>
                    <div class="h-5 w-20 bg-slate-100 rounded-full"></div>
                </div>
                <div class="h-11 w-full bg-slate-200 rounded-xl"></div>
            </div>
        </div>
    @endfor
</div>
