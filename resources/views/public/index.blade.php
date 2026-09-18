@extends('layouts.app')

@section('title', 'SOLECRAFT - Perawatan Presisi untuk Setiap Pasang Sepatu')
@section('meta_description', 'Layanan cuci sepatu profesional, deep clean, unyellowing, reparasi sol, dan restorasi sepatu dengan sistem diagnosa cerdas berbasis material di SOLECRAFT.')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative overflow-hidden bg-gradient-to-b from-white via-amber-50/30 to-slate-50 border-b border-slate-200/80 pt-10 pb-16 lg:pt-20 lg:pb-24">
    <!-- Subtle luxury background glow -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_-10%,rgba(245,158,11,0.08),rgba(255,255,255,0))] pointer-events-none"></div>
    <!-- Subtle grid texture -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M0%2040L40%200M-10%2010L10%20-10M30%2050L50%2030%22%20stroke%3D%22%23e2e8f0%22%20stroke-width%3D%220.5%22%20fill%3D%22none%22%2F%3E%3C%2Fsvg%3E')] opacity-30 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <!-- Left Column: Headline, Subheadline, CTA, Key Highlights -->
            <div class="lg:col-span-7 text-left">
                <h1 class="text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-slate-900 tracking-tight leading-[1.15] mb-4">
                    Perawatan Presisi untuk <span class="text-amber-600">Setiap Pasang Sepatu.</span>
                </h1>

                <!-- Social Proof Rating Badge -->
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-white/90 border border-slate-200/90 shadow-2xs mb-6 backdrop-blur-xs">
                    <div class="flex items-center text-amber-500">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <span class="text-xs font-bold text-slate-900 tracking-tight">4.9/5</span>
                    <span class="text-slate-300 text-xs">&bull;</span>
                    <span class="text-xs font-semibold text-slate-700">300+ Pelanggan Puas</span>
                </div>
                
                <p class="text-sm sm:text-base text-slate-600 font-normal leading-relaxed mb-8 max-w-2xl">
                    Layanan perawatan, pembersihan mendalam, reparasi sol, dan restorasi warna sepatu profesional. Didukung sistem pencocokan cerdas yang menyesuaikan formula chemical dengan karakter bahan dan keluhan spesifik sepatu Anda.
                </p>
                
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mb-10">
                    <a href="#diagnostik" class="group inline-flex items-center justify-center gap-3 px-8 py-4 text-base font-bold text-white bg-slate-900 hover:bg-slate-800 active:scale-[0.98] rounded-xl shadow-md hover:shadow-lg transition-all duration-200 ease-out">
                        <span>Mulai Diagnosa Sepatu</span>
                        <svg class="w-5 h-5 text-amber-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#layanan" class="inline-flex items-center justify-center gap-2 px-6 py-4 text-base font-semibold text-slate-700 bg-white hover:bg-slate-50 active:scale-[0.98] border border-slate-300 hover:border-slate-400 rounded-xl transition-all duration-200 ease-out">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        Lihat Daftar Layanan
                    </a>
                </div>

                <!-- Key Consultation Highlights (Customer-Oriented) -->
                <div class="grid grid-cols-3 gap-3 pt-6 border-t border-slate-200/80">
                    <div class="p-3.5 bg-white rounded-xl border border-slate-200 shadow-2xs hover:shadow-xs transition-shadow">
                        <p class="text-xs font-bold text-amber-800 uppercase tracking-wider">Langkah 01</p>
                        <p class="text-sm font-bold text-slate-900 mt-1">Tipe Sepatu</p>
                        <p class="text-xs text-slate-500 mt-0.5 truncate">Sneakers, Boots, Casual</p>
                    </div>
                    <div class="p-3.5 bg-white rounded-xl border border-slate-200 shadow-2xs hover:shadow-xs transition-shadow">
                        <p class="text-xs font-bold text-slate-700 uppercase tracking-wider">Langkah 02</p>
                        <p class="text-sm font-bold text-slate-900 mt-1">Bahan Material</p>
                        <p class="text-xs text-slate-500 mt-0.5 truncate">Canvas, Suede, Kulit</p>
                    </div>
                    <div class="p-3.5 bg-white rounded-xl border border-slate-200 shadow-2xs hover:shadow-xs transition-shadow">
                        <p class="text-xs font-bold text-amber-800 uppercase tracking-wider">Langkah 03</p>
                        <p class="text-sm font-bold text-slate-900 mt-1">Kebutuhan Spesifik</p>
                        <p class="text-xs text-slate-500 mt-0.5 truncate">Clean, Reglue, Whitening</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Atelier Craft Showcase Card -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div class="w-full max-w-md bg-white rounded-3xl border border-slate-200 shadow-xl shadow-slate-200/40 p-6 sm:p-7 relative overflow-hidden">
                    <!-- Center Craft Showcase: Atelier Sneaker Restoration Photography -->
                    <div class="relative py-1 flex flex-col items-center justify-center">
                        <div class="relative z-10 w-full aspect-square rounded-2xl overflow-hidden shadow-lg border border-slate-200/80 bg-slate-900 group">
                            <picture>
                                <source srcset="{{ asset('images/hero-craftsmanship.jpg') }}" type="image/jpeg">
                                <img src="{{ asset('images/hero-craftsmanship.jpg') }}" 
                                     alt="Restorasi Sneaker &amp; Craftsmanship Workshop SOLECRAFT" 
                                     width="600" 
                                     height="600" 
                                     fetchpriority="high"
                                     class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-out">
                            </picture>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/75 via-transparent to-black/20 pointer-events-none"></div>
                            <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between pointer-events-none">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-950/85 text-amber-300 border border-amber-500/30 backdrop-blur-xs tracking-wider uppercase">
                                    Studio Quality
                                </span>
                                <span class="text-xs font-medium text-slate-200 drop-shadow-sm">
                                    Air Jordan Restoration
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Workshop Quality Value Propositions -->
                    <div class="relative z-20 w-full grid grid-cols-3 gap-2 mt-4 text-center">
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs flex flex-col items-center justify-center">
                            <div class="w-7 h-7 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center mb-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <p class="text-xs font-bold text-slate-900 leading-tight">Garansi Bahan</p>
                            <p class="text-[11px] font-medium text-slate-600 mt-0.5">100% Aman Material</p>
                        </div>
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs flex flex-col items-center justify-center">
                            <div class="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center mb-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <p class="text-xs font-bold text-slate-900 leading-tight">Estimasi Pasti</p>
                            <p class="text-[11px] font-medium text-slate-600 mt-0.5">3–5 Hari Kerja</p>
                        </div>
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs flex flex-col items-center justify-center">
                            <div class="w-7 h-7 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center mb-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z"/></svg>
                            </div>
                            <p class="text-xs font-bold text-slate-900 leading-tight">Asuransi Sepatu</p>
                            <p class="text-[11px] font-medium text-slate-600 mt-0.5">Jaminan Kualitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Method / Customer-Oriented Recommendation Section (Clean 3 Steps) -->
<section id="cara-kerja" class="py-20 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Cara Kerja Rekomendasi Perawatan</h2>
            <p class="text-sm sm:text-base text-slate-600 mt-3 leading-relaxed">
                Sistem menganalisis kondisi dan karakteristik sepatu untuk membantu Anda menemukan layanan perawatan yang paling sesuai, aman, dan tepat sasaran.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
            <!-- Step 1: Kenali Sepatu -->
            <div class="p-7 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-slate-400 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-slate-900 text-white font-black flex items-center justify-center text-sm shadow-md">
                            01
                        </div>
                        <div class="w-10 h-10 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.5 17.5h17c0-2.5-1.5-4-3-4h-3.5l-3-4.5h-4L4 12v5.5z M3.5 17.5v2h17v-2" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-amber-700 transition-colors">Kenali Sepatu</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Pilih tipe siluet dan bahan material sepatu Anda. Setiap bahan (seperti canvas, suede, nubuck, atau genuine leather) memerlukan formula dan teknik treatment yang berbeda.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-slate-100 text-xs font-bold text-slate-700 bg-slate-50 px-3 py-2.5 rounded-xl">
                    Karakteristik &amp; Sensitivitas Bahan
                </div>
            </div>

            <!-- Step 2: Identifikasi Kondisi -->
            <div class="p-7 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-amber-300 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-amber-600 text-white font-black flex items-center justify-center text-sm shadow-md shadow-amber-600/20">
                            02
                        </div>
                        <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-amber-700 transition-colors">Identifikasi Kondisi</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Pilih keluhan atau masalah yang dialami—mulai dari kotor debu harian, noda lumpur membandel, bau apek, midsole menguning karena oksidasi, hingga sol mengelupas.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-amber-100 text-xs font-bold text-amber-800 bg-amber-50/70 px-3 py-2.5 rounded-xl">
                    Diagnosa Masalah &amp; Kebutuhan
                </div>
            </div>

            <!-- Step 3: Dapatkan Rekomendasi -->
            <div class="p-7 sm:p-8 rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-emerald-300 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white font-black flex items-center justify-center text-sm shadow-md shadow-emerald-600/20">
                            03
                        </div>
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200/80 flex items-center justify-center text-emerald-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-emerald-700 transition-colors">Dapatkan Rekomendasi</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Sistem mencocokkan kebutuhan dengan layanan yang tersedia, menyajikan pilihan treatment yang paling aman dan kompatibel, lengkap dengan rincian tarif serta estimasi hari.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-emerald-100 text-xs font-bold text-emerald-800 bg-emerald-50/70 px-3 py-2.5 rounded-xl">
                    Pilihan Treatment Paling Tepat &amp; Aman
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Diagnostic Form Section -->
<section id="diagnostik" class="py-20 bg-gradient-to-b from-slate-100/80 to-slate-50 section-wave-divider">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Ceritakan Kondisi Sepatu Anda</h2>
            <p class="text-sm sm:text-base text-slate-600 mt-3 leading-relaxed">
                Pilih profil sepatu, material bahan, dan keluhan spesifik untuk menemukan rekomendasi perawatan paling aman dan presisi.
            </p>
        </div>

        <!-- Visual Progress Bar -->
        <div class="mb-6 max-w-2xl mx-auto">
            <div class="flex items-center justify-between text-sm font-semibold text-slate-700 mb-2.5">
                <span id="progress-label">Mulai diagnosa sepatu (0/3)</span>
                <span id="progress-pct" class="font-bold text-amber-600">0%</span>
            </div>
            <div class="diagnosis-progress-bar">
                <div id="progress-fill" class="diagnosis-progress-fill" style="width: 0%"></div>
            </div>
        </div>

        <!-- Step Progress Indicator -->
        <div class="mb-10 max-w-2xl mx-auto">
            <div class="grid grid-cols-3 gap-2 sm:gap-4 text-center text-xs font-semibold">
                <div id="step-nav-1" class="flex items-center justify-center sm:justify-start gap-2 p-2.5 sm:px-4 rounded-xl bg-white border-2 border-slate-900 text-slate-900 shadow-xs transition-all">
                    <span id="step-badge-1" class="w-6 h-6 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs font-bold flex-shrink-0 transition-colors">1</span>
                    <span class="truncate text-xs font-bold">Tipe Sepatu</span>
                </div>
                <div id="step-nav-2" class="flex items-center justify-center sm:justify-start gap-2 p-2.5 sm:px-4 rounded-xl bg-white border border-slate-200 text-slate-500 shadow-xs transition-all">
                    <span id="step-badge-2" class="w-6 h-6 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-xs font-bold flex-shrink-0 transition-colors">2</span>
                    <span class="truncate text-xs font-semibold">Material Bahan</span>
                </div>
                <div id="step-nav-3" class="flex items-center justify-center sm:justify-start gap-2 p-2.5 sm:px-4 rounded-xl bg-white border border-slate-200 text-slate-500 shadow-xs transition-all">
                    <span id="step-badge-3" class="w-6 h-6 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-xs font-bold flex-shrink-0 transition-colors">3</span>
                    <span class="truncate text-xs font-semibold">Kondisi &amp; Keluhan</span>
                </div>
            </div>
        </div>

        <form id="recommendation-form" class="space-y-10">
            <!-- Step 1: Tipe Sepatu -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-xs" role="radiogroup" aria-labelledby="label-step-1">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
                    <div>
                        <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">STEP 01</span>
                        <h3 id="label-step-1" class="text-lg sm:text-xl font-extrabold text-slate-900 tracking-tight">Pilih Tipe Sepatu</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Pilih siluet yang paling mendekati model sepatu Anda</p>
                    </div>
                    <span class="self-start sm:self-auto text-xs text-slate-600 bg-slate-100 px-3 py-1 rounded-full font-semibold border border-slate-200/80">Pilih 1 tipe</span>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                        $typeIcons = [
                            'Sneakers' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.5 17.5h17c0-2.5-1.5-4-3-4h-3.5l-3-4.5h-4L4 12v5.5z M3.5 17.5v2h17v-2" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2m0-2l2 2" />',
                            'Boots' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 3.5h5v7.5l4 3v3.5H4v-2c0-1.5 1-2.5 2-3V3.5z M4 17.5h13v2H4z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h3m-3 3h3" />',
                            'Loafers' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 16h18c-1-3.5-3.5-4.5-6.5-4.5-1.5 0-3 1-5 1s-3-1-4.5-1c-2 0-2 4.5-2 4.5z M3 16v2h18v-2" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 12.5h4" />',
                            'Slip-on' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.5 16.5h17c-0.8-2.5-2.5-4-5.5-4-2 0-3.5 1.5-5 1.5s-3-1.5-4.5-1.5c-2 0-2 4.5-2 4.5z M3.5 16.5v2h17v-2" />',
                            'Canvas Shoes' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.5 16.5h17c-0.5-2-2-3.5-4-3.5l-3.5-4h-3.5l-3 4-2.5 1v2.5z M3.5 16.5v2h17v-2" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.5 11.5l2 2m0-2l2 2" />',
                            'Sports' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 16.5h18c-1-3-3.5-4.5-6-4.5l-3-3.5h-3l-3 4.5-3 1v2.5z M3.5 16.5v2h18v-2" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 14l3.5-2.5" />',
                        ];
                        $typeHelpers = [
                            'Sneakers' => 'Air Max, Samba, Casual',
                            'Boots' => 'Timberland, Red Wing',
                            'Loafers' => 'Penny Loafer, Formal',
                            'Slip-on' => 'Vans Slip-on, Low Cut',
                            'Canvas Shoes' => 'Converse, Ventela',
                            'Sports' => 'Running, Training, Gym',
                        ];
                    @endphp

                    @foreach($types as $type)
                        <label tabindex="0" class="card-option relative flex flex-col items-center justify-center p-4 rounded-xl border border-slate-200 bg-slate-50/60 text-slate-800 hover:border-slate-300 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500 cursor-pointer text-center group transition-all">
                            <input type="radio" name="shoe_type" value="{{ $type }}" class="sr-only" required>
                            <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-white border border-slate-200/80 card-icon-wrap flex items-center justify-center text-slate-700 mb-2.5 transition-colors shadow-2xs group-hover:border-slate-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $typeIcons[$type] ?? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />' !!}
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-bold text-slate-900 block">{{ $type }}</span>
                            <span class="text-xs text-slate-500 font-normal mt-1 block leading-tight">{{ $typeHelpers[$type] ?? '' }}</span>
                        </label>
                    @endforeach
                </div>
                <p id="error-shoe_type" class="text-xs text-rose-600 mt-2 hidden" role="alert"></p>
            </div>

            <!-- Step 2: Bahan / Material -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/80 shadow-xs" role="radiogroup" aria-labelledby="label-step-2">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
                    <div>
                        <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">STEP 02</span>
                        <h3 id="label-step-2" class="text-lg sm:text-xl font-extrabold text-slate-900 tracking-tight">Pilih Bahan Material</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Bahan menentukan formula chemical dan teknik treatment yang aman</p>
                    </div>
                    <span class="self-start sm:self-auto text-xs text-slate-600 bg-slate-100 px-3 py-1 rounded-full font-semibold border border-slate-200/80">Pilih 1 material</span>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                        $materialIcons = [
                            'Canvas' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 6h16M4 12h16M4 18h16M7 3v18M12 3v18M17 3v18" />',
                            'Suede' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 3c-4 0-7 2.5-7 6 0 2.5 1.5 4.5 3 6l2 6h4l2-6c1.5-1.5 3-3.5 3-6 0-3.5-3-6-7-6z" /><path stroke-linecap="round" stroke-width="1.5" d="M10 8l4 4m-4 0l4-4" />',
                            'Nubuck' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M6 4h12l2 4-1 5 2 4-3 3H6l-3-3 2-4-1-5 2-4z" /><path stroke-linecap="round" stroke-width="1.5" d="M9 10h6M9 14h6" />',
                            'Genuine Leather' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 3l3 2 3-2 2 3-1 4 3 2-2 4 1 3-3 2-3-1-3 1-3-2 1-3-2-4 3-2-1-4z" /><circle cx="12" cy="12" r="2" stroke-width="1.5" />',
                            'Synthetic' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 3L3 7.5 12 12l9-4.5L12 3z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 12l9 4.5 9-4.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 16.5l9 4.5 9-4.5" />',
                            'Mesh/Knit' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 2l4 2.5v5L12 12 8 9.5v-5L12 2zM12 12l4 2.5v5L12 22l-4-2.5v-5l4-2.5z" />',
                        ];
                        $materialHelpers = [
                            'Canvas' => 'Kain kanvas tenun / katun',
                            'Suede' => 'Bahan beludru lembut & sensitif',
                            'Nubuck' => 'Kulit luar bertekstur matte',
                            'Genuine Leather' => 'Kulit asli alami (sapi/domba)',
                            'Synthetic' => 'Kulit sintetis / PU / faux',
                            'Mesh/Knit' => 'Rajut berpori sirkulasi udara',
                        ];
                        $materialTooltips = [
                            'Canvas' => 'Kain serat katun/kanvas tenun kuat seperti pada Converse atau Ventela.',
                            'Suede' => 'Bahan beludru lembut dari lapisan kulit dalam, sangat rentan air & noda.',
                            'Nubuck' => 'Kulit luar yang diampelas halus hingga bertekstur velvet lembut & matte.',
                            'Genuine Leather' => 'Kulit sapi atau domba asli berpori natural, butuh conditioner rutin.',
                            'Synthetic' => 'Kulit sintetis/PU buatan yang tahan air namun rentan pecah jika kering.',
                            'Mesh/Knit' => 'Bahan rajut atau jaring berserat lentur dengan sirkulasi udara maksimal.',
                        ];
                    @endphp

                    @foreach($materials as $material)
                        <label tabindex="0" class="card-option relative flex flex-col items-center justify-center p-4 rounded-xl border border-slate-200 bg-slate-50/60 text-slate-800 hover:border-slate-300 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500 cursor-pointer text-center group transition-all">
                            <input type="radio" name="material" value="{{ $material }}" class="sr-only" required>
                            <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl bg-white border border-slate-200/80 card-icon-wrap flex items-center justify-center text-slate-700 mb-2.5 transition-colors shadow-2xs group-hover:border-slate-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $materialIcons[$material] ?? '' !!}
                                </svg>
                            </div>
                            <div class="inline-flex items-center justify-center gap-1">
                                <span class="text-xs sm:text-sm font-bold text-slate-900">{{ $material }}</span>
                                <span class="group/tip relative inline-flex items-center text-slate-400 hover:text-slate-700 cursor-help" title="{{ $materialTooltips[$material] ?? '' }}">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg>
                                    <span class="pointer-events-none absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover/tip:block z-30 w-48 p-2.5 text-xs leading-snug font-normal text-white bg-slate-900 rounded-lg shadow-xl text-center">
                                        {{ $materialTooltips[$material] ?? '' }}
                                        <span class="absolute top-full left-1/2 -translate-x-1/2 -mt-1 border-4 border-transparent border-t-slate-900"></span>
                                    </span>
                                </span>
                            </div>
                            <span class="text-xs text-slate-500 font-normal mt-1 block leading-tight">{{ $materialHelpers[$material] ?? '' }}</span>
                        </label>
                    @endforeach
                </div>
                <p id="error-material" class="text-xs text-rose-600 mt-2 hidden" role="alert"></p>
            </div>

            <!-- Step 3: Masalah / Keluhan (Multi Issue) -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/80 shadow-xs" role="group" aria-labelledby="label-step-3">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
                    <div>
                        <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">STEP 03</span>
                        <h3 id="label-step-3" class="text-lg sm:text-xl font-extrabold text-slate-900 tracking-tight">Pilih Kondisi &amp; Keluhan</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Bisa pilih lebih dari satu kendala yang ingin diperbaiki</p>
                    </div>
                    <span class="self-start sm:self-auto text-xs text-slate-600 bg-slate-100 px-3 py-1 rounded-full font-semibold border border-slate-200/80">Boleh pilih lebih dari satu</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    @php
                        $issueIcons = [
                            'Kotor Ringan/Debu' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 3v3m0 12v3M3 12h3m12 0h3m-2.929-6.071l-2.121 2.121M7.05 16.95l-2.121 2.121M18.071 18.071l-2.121-2.121M7.05 7.05L4.929 4.929" /><circle cx="12" cy="12" r="2.5" />',
                            'Lumpur/Kotor Membandel' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 2.5s6 7 6 11a6 6 0 11-12 0c0-4 6-11 6-11z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.5c0 1.657 1.343 3 3 3" />',
                            'Bau/Bakteri' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 4c-1 2-1 4 0 6s1 4 0 6M12 3c-1.2 2.5-1.2 5 0 7.5s1.2 5 0 7.5M16 4c-1 2-1 4 0 6s1 4 0 6" />',
                            'Jamur' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 3a9 9 0 00-9 9c0 3.5 2 6.5 5 7.5v-3.5a2 2 0 014 0v3.5c3-1 5-4 5-7.5a9 9 0 00-9-9z" /><circle cx="9" cy="9" r="1" fill="currentColor" /><circle cx="15" cy="9" r="1" fill="currentColor" /><circle cx="12" cy="13" r="1" fill="currentColor" />',
                            'Midsole Menguning' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 16h18c-1-3-3.5-4-6-4l-3-3.5h-3l-3 4-3 1v2.5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v3m4.5-1.5l-2 2m-7-2l2 2" />',
                            'Warna Pudar/Repaint' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M18.364 5.636a2 2 0 00-2.828 0L9 12.172V15h2.828l6.536-6.536a2 2 0 000-2.828z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 21a3 3 0 013-3h1" />',
                            'Sol Mengelupas/Reglue' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 17h16c0-2-1-3-3-3H7c-2 0-3 1-3 3z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 17v2h16v-2" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 10l3 3 3-3M12 4v9" />',
                        ];
                        $issueLabels = [
                            'Kotor Ringan/Debu' => 'Kotor Ringan / Debu',
                            'Lumpur/Kotor Membandel' => 'Lumpur & Noda Berat',
                            'Bau/Bakteri' => 'Bau & Bakteri',
                            'Jamur' => 'Bintik Jamur',
                            'Midsole Menguning' => 'Midsole Menguning',
                            'Warna Pudar/Repaint' => 'Warna Pudar (Repaint)',
                            'Sol Mengelupas/Reglue' => 'Sol Mengelupas (Reglue)',
                        ];
                        $issueHelpers = [
                            'Kotor Ringan/Debu' => 'Debu & kotoran harian tipis',
                            'Lumpur/Kotor Membandel' => 'Tanah, lumpur basah & noda pekat',
                            'Bau/Bakteri' => 'Aroma lembap & bakteri',
                            'Jamur' => 'Bercak jamur pada upper/insole',
                            'Midsole Menguning' => 'Oksidasi sol menguning',
                            'Warna Pudar/Repaint' => 'Warna pudar & kusam butuh cat ulang',
                            'Sol Mengelupas/Reglue' => 'Sol terbuka / lepas lem',
                        ];
                    @endphp

                    @foreach($issues as $issue)
                        <label tabindex="0" class="card-option relative flex items-center gap-3.5 p-3.5 sm:p-4 rounded-xl border border-slate-200 bg-slate-50/60 text-slate-800 hover:border-slate-300 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500 cursor-pointer group transition-all">
                            <input type="checkbox" name="issues[]" value="{{ $issue }}" class="sr-only">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200/80 card-icon-wrap flex items-center justify-center text-slate-700 flex-shrink-0 transition-colors shadow-2xs group-hover:border-slate-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $issueIcons[$issue] ?? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />' !!}
                                </svg>
                            </div>
                            <div class="flex-grow min-w-0">
                                <span class="text-xs sm:text-sm font-bold text-slate-900 block">{{ $issueLabels[$issue] ?? $issue }}</span>
                                <span class="text-xs text-slate-500 block leading-tight mt-0.5">{{ $issueHelpers[$issue] ?? '' }}</span>
                            </div>
                            <div class="checkbox-indicator w-6 h-6 rounded-md border-2 border-slate-300 flex items-center justify-center bg-white text-transparent group-hover:border-slate-400 flex-shrink-0 transition-colors">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </label>
                    @endforeach
                </div>
                <p id="error-issues" class="text-xs text-rose-600 mt-2 hidden" role="alert"></p>
            </div>

            <!-- Action Controls -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4">
                <button type="button" id="btn-reset" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 text-sm font-bold text-slate-700 bg-white hover:bg-slate-50 border border-slate-300 hover:border-slate-400 rounded-xl transition-all shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    <span>Reset Pilihan</span>
                </button>

                <button type="submit" id="btn-submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-3.5 text-base font-bold text-white bg-slate-900 hover:bg-slate-800 active:scale-[0.99] rounded-xl shadow-md hover:shadow-lg transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                    <span id="btn-submit-text">Dapatkan Rekomendasi Layanan</span>
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    <svg id="btn-submit-spinner" class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </form>

        <!-- General Error Alert Container -->
        <div id="form-alert" class="mt-6 hidden p-4 rounded-xl border border-rose-200 bg-rose-50 text-rose-800 text-sm"></div>
    </div>
</section>

<!-- Recommendation Results Section (Dynamically rendered upon diagnosis completion) -->
<section id="hasil-rekomendasi" class="hidden py-16 sm:py-20 bg-gradient-to-b from-white to-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-6 mb-10 border-b border-slate-200">
            <div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900">Rekomendasi Treatment Terbaik</h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">Hasil kurasi algoritma pencocokan material &amp; keluhan spesifik sepatu Anda.</p>
            </div>
            <div id="results-count-badge" class="hidden">
                <span class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-slate-900 text-amber-300 border border-slate-800 shadow-xs">
                    <span id="results-count-text">0</span> Treatment Cocok
                </span>
            </div>
        </div>

        <!-- Loading Skeleton State -->
        <div id="state-loading" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for($i = 0; $i < 3; $i++)
                <div class="p-6 rounded-2xl border border-slate-200 bg-white animate-pulse space-y-4">
                    <div class="flex justify-between items-center">
                        <div class="h-6 w-28 bg-slate-200 rounded-full"></div>
                        <div class="h-6 w-16 bg-slate-200 rounded-lg"></div>
                    </div>
                    <div class="h-6 w-3/4 bg-slate-200 rounded"></div>
                    <div class="space-y-2">
                        <div class="h-4 w-full bg-slate-200 rounded"></div>
                        <div class="h-4 w-5/6 bg-slate-200 rounded"></div>
                    </div>
                    <div class="h-8 w-1/2 bg-slate-200 rounded"></div>
                    <div class="h-10 w-full bg-slate-200 rounded-xl"></div>
                </div>
            @endfor
        </div>

        <!-- Success Result Grid -->
        <div id="state-success" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Dynamic cards injected via Vanilla JS -->
        </div>

        <!-- Empty State Fallback (Specialist Consultation Required) -->
        <div id="state-empty" class="hidden p-8 sm:p-12 rounded-3xl bg-amber-50/70 border border-amber-200 text-center max-w-2xl mx-auto">
            <div class="w-16 h-16 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-amber-900 mb-2">Konsultasi Spesialis Diperlukan</h3>
            <p id="empty-state-message" class="text-sm text-amber-800 mb-6 leading-relaxed">
                Kombinasi jenis sepatu, material, dan kendala Anda membutuhkan penanganan khusus. Tim spesialis SOLECRAFT siap memberikan diagnosa langsung untuk menemukan perawatan paling optimal.
            </p>
            <a id="btn-consultation-wa" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl shadow-md transition-all">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                </svg>
                <span>Konsultasi via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Official SOLECRAFT Pricelist & Treatment Menu Section -->
<section id="layanan" class="pt-14 sm:pt-16 pb-8 sm:pb-10 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-10 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Layanan Terpopuler &amp; Pilihan Utama
            </h2>
            <p class="text-base text-slate-700 mt-2.5 font-medium">
                Pilihan treatment yang paling sering dipesan oleh pelanggan SOLECRAFT dengan chemical grade profesional dan jaminan aman material.
            </p>
        </div>

        <!-- Standee Highlight Banner (Unified Atelier Theme) -->
        <div class="mb-12 rounded-2xl bg-slate-900 text-white p-6 sm:p-7 shadow-xl border border-slate-800">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-y md:divide-y-0 md:divide-x divide-slate-800">
                <!-- 1. All Cleaning & Parfume -->
                <div class="pt-3 md:pt-0 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 shadow-inner flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <p class="text-xs font-bold text-slate-100 uppercase tracking-wider">All Cleaning &amp; Parfume</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Aroma segar eksklusif tahan lama</p>
                </div>

                <!-- 2. Packing Ziplock -->
                <div class="pt-3 md:pt-0 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 shadow-inner flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                            <rect x="4" y="3" width="16" height="18" rx="2.5" stroke-width="1.75"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5h16M9 7.5v2m6-2v2M8 14h8M8 17h5" />
                        </svg>
                    </div>
                    <p class="text-xs font-bold text-slate-100 uppercase tracking-wider">Packing Ziplock</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Higienis &amp; kedap debu workshop</p>
                </div>

                <!-- 3. Estimasi 3-5 Hari -->
                <div class="pt-3 md:pt-0 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 shadow-inner flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-xs font-bold text-slate-100 uppercase tracking-wider">Estimasi 3–5 Hari</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Pengerjaan cermat &amp; tepat waktu</p>
                </div>

                <!-- 4. Hard Cleaning +25K -->
                <div class="pt-3 md:pt-0 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 shadow-inner flex items-center justify-center mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <p class="text-xs font-bold text-slate-100 uppercase tracking-wider">Hard Cleaning +25K</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Treatment ekstra noda berat*</p>
                </div>
            </div>
            
            <!-- Refined Atelier Notice -->
            <div class="mt-5 pt-3.5 border-t border-slate-800 text-center text-xs text-slate-400">
                <span class="text-amber-400 font-semibold">*Ketentuan Hard Cleaning:</span> Khusus sepatu dengan noda lumpur tebal, jamur pekat, atau bau membandel. <span class="text-slate-400 font-normal">(Tidak menerima kontaminasi darah atau liur hewan demi standar higienitas workshop).</span>
            </div>
        </div>

        <!-- Featured Services: 6 Paling Populer -->
        @php
            $featuredSlugs = [
                'regular-shoes-dark',
                'white-shoes-treatment',
                'suede-care-treatment',
                'leather-wax-conditioner',
                'shoes-repair-reglue',
                'unyellowing-midsole',
            ];
            $featuredServices = $services->filter(fn($s) => in_array($s->slug, $featuredSlugs));
            if ($featuredServices->count() < 6) {
                $featuredServices = $services->take(6);
            }
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredServices as $service)
                @php
                    $cat = 'cleaning';
                    if (str_contains($service->slug, 'repair') || str_contains($service->slug, 'sol') || str_contains($service->slug, 'reglue')) {
                        $categoryLabel = 'Shoes Repair';
                        $badgeStyle = 'bg-blue-50 text-blue-700 border-blue-200';
                    } elseif (str_contains($service->slug, 'whitening') || str_contains($service->slug, 'unyellowing')) {
                        $categoryLabel = 'Whitening & UV';
                        $badgeStyle = 'bg-amber-50 text-amber-800 border-amber-200';
                    } else {
                        $categoryLabel = 'Cleaning Regular';
                        $badgeStyle = 'bg-slate-100 text-slate-700 border-slate-200';
                    }
                    $isPopular = str_contains($service->slug, 'unyellowing') || str_contains($service->slug, 'suede') || str_contains($service->slug, 'dark') || str_contains($service->slug, 'reglue');
                @endphp
                <div class="group p-6 rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-slate-400 transition-all flex flex-col justify-between {{ $isPopular ? 'is-best-value' : '' }}">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-md border uppercase tracking-wider {{ $badgeStyle }}">
                                {{ $categoryLabel }}
                            </span>
                            @if($isPopular)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/15 text-amber-900 border border-amber-300/80 shadow-xs tracking-wide">
                                    <svg class="w-3.5 h-3.5 text-amber-500 fill-amber-500" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <span>Favorit</span>
                                </span>
                            @elseif($service->estimated_days)
                                <span class="text-xs font-bold text-slate-700">Estimasi {{ $service->estimated_days }} Hari</span>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                            {{ $service->name }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-700 mt-1.5 mb-4 leading-relaxed font-normal">{{ $service->description }}</p>
                        
                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 mb-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-bold text-slate-700">Tarif Layanan</span>
                                    @if($service->estimated_days)
                                        <span class="block text-xs font-semibold text-slate-700 mt-0.5">Estimasi {{ $service->estimated_days }} Hari</span>
                                    @endif
                                </div>
                                <span class="text-base font-extrabold text-slate-900">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3.5 border-t border-slate-100 flex items-center justify-between">
                        <div class="flex flex-wrap gap-1.5 max-w-[60%]">
                            @if(is_array($service->supported_materials))
                                @foreach(array_slice($service->supported_materials, 0, 3) as $mat)
                                    <span class="text-[11px] px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-800 font-semibold border border-slate-200/80">{{ $mat }}</span>
                                @endforeach
                            @endif
                        </div>
                        <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya mau booking/konsultasi layanan ' . $service->name . ' (Tarif: Rp ' . number_format($service->price, 0, ',', '.') . ').') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-emerald-600 hover:text-emerald-700 transition-colors">
                            <span>Pesan via WA</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Standout CTA Banner to Open Full Catalog Modal -->
        <div class="mt-8 sm:mt-10 text-center flex justify-center">
            <div class="inline-flex flex-col sm:flex-row items-center justify-between gap-5 p-5 sm:p-6 rounded-2xl bg-white border-2 border-slate-200/90 shadow-md max-w-3xl w-full text-left">
                <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[11px] font-black uppercase tracking-wider bg-slate-100 text-slate-800 border border-slate-200">
                        Katalog Lengkap ({{ $services->count() }} Pilihan Paket)
                    </span>
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 mt-1">Ingin melihat paket reparasi sol, repaint, atau treatment anak/wanita?</h3>
                    <p class="text-xs sm:text-sm text-slate-700 mt-1 leading-relaxed">Tersedia menu lengkap jahit sol, reglue, ganti outsole, recolour kulit &amp; suede, hingga rewhitening upper.</p>
                </div>
                <button type="button" id="btn-open-catalog" class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 active:scale-95 text-white font-bold text-xs sm:text-sm shadow-md hover:shadow-lg transition-all cursor-pointer">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    <span>Buka Semua {{ $services->count() }} Layanan</span>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Full Catalog Modal (23 Pilihan Layanan) -->
<div id="modal-catalog" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-6 overflow-y-auto hidden" role="dialog" aria-modal="true" aria-labelledby="modal-catalog-title">
    <!-- Backdrop with blur -->
    <div id="modal-catalog-backdrop" class="fixed inset-0 bg-slate-950/75 backdrop-blur-sm transition-opacity cursor-pointer"></div>

    <!-- Modal Content Window -->
    <div class="relative bg-white rounded-3xl shadow-2xl max-w-5xl w-full max-h-[90vh] flex flex-col overflow-hidden border border-slate-200 z-10 animate-scale-up">
        
        <!-- Header -->
        <div class="px-5 sm:px-7 py-5 border-b border-slate-200 flex items-center justify-between bg-slate-50/90">
            <div>
                <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-800 border border-slate-200 text-[11px] font-bold uppercase tracking-wider mb-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                    <span>Katalog Lengkap &bull; {{ $services->count() }} Paket Layanan</span>
                </div>
                <h3 id="modal-catalog-title" class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">
                    Daftar Menu &amp; Tarif Layanan SOLECRAFT
                </h3>
                <p class="text-xs sm:text-sm text-slate-700 mt-0.5 font-medium">
                    Gunakan pencarian atau filter kategori untuk melihat detail spesifikasi dan estimasi pengerjaan.
                </p>
            </div>
            <button type="button" id="btn-close-catalog" class="w-10 h-10 rounded-full bg-slate-200/80 hover:bg-slate-300 text-slate-700 flex items-center justify-center transition-colors cursor-pointer" aria-label="Tutup katalog">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Search & Filter Tabs Bar -->
        <div class="px-5 sm:px-7 py-4 bg-white border-b border-slate-200 space-y-3">
            <!-- Search Bar -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" id="pricelist-search" placeholder="Cari nama paket (misal: suede, boots, unyellowing, reglue, dr martens)..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-slate-900 text-sm text-slate-900 placeholder-slate-500 bg-slate-50/50">
            </div>

            <!-- Filter Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs font-semibold scrollbar-none">
                <button type="button" class="pricelist-tab active px-3.5 py-1.5 rounded-lg bg-slate-900 text-white shadow-xs cursor-pointer whitespace-nowrap transition-all" data-filter="all">Semua ({{ $services->count() }})</button>
                <button type="button" class="pricelist-tab px-3.5 py-1.5 rounded-lg bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 cursor-pointer whitespace-nowrap transition-all" data-filter="cleaning">Cleaning Regular</button>
                <button type="button" class="pricelist-tab px-3.5 py-1.5 rounded-lg bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 cursor-pointer whitespace-nowrap transition-all" data-filter="kids-women">Kids &amp; Women</button>
                <button type="button" class="pricelist-tab px-3.5 py-1.5 rounded-lg bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 cursor-pointer whitespace-nowrap transition-all" data-filter="repair">Shoes Repair</button>
                <button type="button" class="pricelist-tab px-3.5 py-1.5 rounded-lg bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 cursor-pointer whitespace-nowrap transition-all" data-filter="repaint">Repaint &amp; Recolour</button>
                <button type="button" class="pricelist-tab px-3.5 py-1.5 rounded-lg bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 cursor-pointer whitespace-nowrap transition-all" data-filter="whitening">Unyellowing &amp; Whitening</button>
            </div>
        </div>

        <!-- Scrollable Service Cards List -->
        <div class="p-5 sm:p-7 overflow-y-auto flex-1 bg-slate-50/60">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="pricelist-cards-container">
                @foreach($services as $service)
                    @php
                        $cat = 'cleaning';
                        if (str_contains($service->slug, 'repair')) {
                            $cat = 'repair';
                            $categoryLabel = 'Shoes Repair';
                            $badgeStyle = 'bg-blue-50 text-blue-700 border-blue-200';
                        } elseif (str_contains($service->slug, 'repaint')) {
                            $cat = 'repaint';
                            $categoryLabel = 'Repaint & Recolour';
                            $badgeStyle = 'bg-purple-50 text-purple-700 border-purple-200';
                        } elseif (str_contains($service->slug, 'kids') || str_contains($service->slug, 'women')) {
                            $cat = 'kids-women';
                            $categoryLabel = 'Kids & Women';
                            $badgeStyle = 'bg-pink-50 text-pink-700 border-pink-200';
                        } elseif (str_contains($service->slug, 'unyellowing') || str_contains($service->slug, 'rewhitening') || str_contains($service->slug, 'whitening')) {
                            $cat = 'whitening';
                            $categoryLabel = 'Whitening & UV';
                            $badgeStyle = 'bg-amber-50 text-amber-800 border-amber-200';
                        } else {
                            $cat = 'cleaning';
                            $categoryLabel = 'Cleaning Regular';
                            $badgeStyle = 'bg-slate-100 text-slate-700 border-slate-200';
                        }
                    @endphp
                    <div class="pricelist-card group p-4 sm:p-5 rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-slate-400 transition-all flex flex-col justify-between"
                         data-category="{{ $cat }}"
                         data-title="{{ $service->name }}">
                        <div>
                            <div class="flex items-center justify-between mb-2.5">
                                <span class="text-[10px] font-bold px-2 py-0.5 rounded-md border uppercase tracking-wider {{ $badgeStyle }}">
                                    {{ $categoryLabel }}
                                </span>
                                @if($service->estimated_days)
                                    <span class="text-xs font-bold text-slate-700">Estimasi {{ $service->estimated_days }} Hari</span>
                                @endif
                            </div>
                            <h4 class="text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                                {{ $service->name }}
                            </h4>
                            <p class="text-xs sm:text-sm text-slate-700 mt-1 mb-3 leading-relaxed line-clamp-3">{{ $service->description }}</p>
                            
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80 mb-3.5">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-slate-700">Tarif Mulai</span>
                                    <span class="text-base font-extrabold text-slate-900">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                            <div class="flex flex-wrap gap-1.5 max-w-[55%]">
                                @if(is_array($service->supported_materials))
                                    @foreach(array_slice($service->supported_materials, 0, 2) as $mat)
                                        <span class="text-[10px] px-2 py-0.5 rounded-md bg-slate-100 text-slate-800 font-semibold border border-slate-200/80">{{ $mat }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin pesan layanan ' . $service->name . ' (Tarif: Rp ' . number_format($service->price, 0, ',', '.') . ').') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-emerald-600 hover:text-emerald-700 transition-colors">
                                <span>Pesan WA</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty Search State -->
            <div id="pricelist-no-results" class="hidden py-12 text-center">
                <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="text-sm font-bold text-slate-800">Layanan tidak ditemukan</h4>
                <p class="text-xs text-slate-600 mt-1">Coba gunakan kata kunci lain seperti "reglue", "suede", atau "unyellowing".</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="px-5 sm:px-7 py-4 border-t border-slate-200 bg-white flex flex-col sm:flex-row items-center justify-between gap-3">
            <div class="text-xs text-slate-700 font-medium flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
                <span>Termasuk sterilisasi UV, parfume eksklusif, &amp; ziplock packing anti debu.</span>
            </div>
            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                <button type="button" id="btn-close-catalog-footer" class="px-4 py-2 rounded-xl border border-slate-300 hover:bg-slate-50 text-slate-700 font-semibold text-xs transition-colors cursor-pointer">
                    Tutup
                </button>
                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin konsultasi paket perawatan dan reparasi sepatu.') }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-sm inline-flex items-center gap-1.5 transition-colors">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>Konsultasi WA</span>
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Before / After Interactive Comparison Slider (Dark Workshop Theme) -->
<section id="showcase" class="pt-14 sm:pt-16 pb-16 sm:pb-20 bg-slate-900 text-white relative overflow-hidden section-wave-divider section-wave-divider-dark">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M0%2060L60%200M-15%2015L15%20-15M45%2075L75%2045%22%20stroke%3D%22%23334155%22%20stroke-width%3D%220.4%22%20fill%3D%22none%22%2F%3E%3C%2Fsvg%3E')] opacity-40 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                Before &amp; After Treatment
            </h2>
            <p class="text-sm sm:text-base text-slate-400 mt-2.5 leading-relaxed">
                Geser garis slider di bawah untuk melihat perbedaan nyata sebelum dan sesudah treatment di workshop SOLECRAFT.
            </p>
        </div>

        <!-- Interactive Comparison Slider Container -->
        <div class="max-w-4xl mx-auto mb-14">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-slate-700/80 bg-slate-950 aspect-[4/3] sm:aspect-[16/10] select-none group">
                
                <!-- 1. Background Image: CLEAN (Sesudah) -->
                <img src="{{ asset('images/before-after-clean.jpg') }}" alt="Sesudah Treatment SOLECRAFT" class="absolute inset-0 w-full h-full object-cover object-center select-none pointer-events-none">
                
                <!-- 2. Clipped Overlay Image: DIRTY (Sebelum) -->
                <div id="before-image-wrap" class="absolute inset-0 w-full h-full overflow-hidden select-none pointer-events-none" style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);">
                    <img src="{{ asset('images/before-after-dirty.jpg') }}" alt="Sebelum Treatment SOLECRAFT" class="absolute inset-0 w-full h-full object-cover object-center select-none pointer-events-none">
                </div>

                <!-- 3. Vertical Slider Handle Line & Tactile Thumb -->
                <div id="slider-handle-line" class="absolute inset-y-0 pointer-events-none z-20 flex items-center justify-center -translate-x-1/2" style="left: 50%;">
                    <!-- Vertical Line -->
                    <div class="w-1 h-full bg-white shadow-[0_0_12px_rgba(0,0,0,0.8)]"></div>
                    <!-- Tactile Handle Button -->
                    <div class="absolute w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white text-slate-900 shadow-2xl border-2 border-amber-500 flex items-center justify-center font-black text-xs select-none">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 9l4-4 4 4m0 6l-4 4-4-4" transform="rotate(90 12 12)"/>
                        </svg>
                    </div>
                </div>

                <!-- 4. Badges (Before / After) -->
                <div class="absolute top-4 left-4 z-20 pointer-events-none">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-[11px] font-black uppercase tracking-wider bg-slate-950/85 text-amber-300 border border-amber-500/40 backdrop-blur-md shadow-lg">
                        <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                        Sebelum (Kotor &amp; Oksidasi)
                    </span>
                </div>
                <div class="absolute top-4 right-4 z-20 pointer-events-none">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-[11px] font-black uppercase tracking-wider bg-slate-950/85 text-emerald-400 border border-emerald-500/40 backdrop-blur-md shadow-lg">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Sesudah (Bersih &amp; Terestorasi)
                    </span>
                </div>

                <!-- 5. Floating Hint at Bottom Center -->
                <div class="absolute bottom-4 inset-x-0 flex justify-center z-20 pointer-events-none">
                    <span class="px-4 py-1.5 rounded-full text-xs font-semibold text-white/90 bg-black/60 backdrop-blur-md shadow-md flex items-center gap-2 border border-white/10">
                        <svg class="w-4 h-4 text-amber-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" transform="rotate(90 12 12)"/>
                        </svg>
                        Geser kiri &amp; kanan untuk membandingkan
                    </span>
                </div>

                <!-- 6. Invisible Native Range Input for Fluid Touch/Mouse Dragging -->
                <input type="range" min="0" max="100" value="50" id="before-after-range" aria-label="Geser untuk membandingkan foto sebelum dan sesudah perawatan" class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-30 touch-none">
            </div>

            <!-- Case Study Information Card -->
            <div class="mt-6 p-5 sm:p-6 rounded-2xl bg-slate-800/90 border border-slate-700/80 backdrop-blur-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-5 shadow-xl">
                <div class="space-y-1">
                    <div class="inline-flex items-center gap-2">
                        <span class="px-2.5 py-0.5 rounded text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30 uppercase tracking-wider">Kasus Terverifikasi</span>
                        <span class="text-xs font-semibold text-slate-400">&bull; Nike Air Jordan 1 High OG</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-white">Midsole Unyellowing &amp; Deep Leather Conditioning</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-2xl">
                        Midsole karet yang menguning pekat dikembalikan ke putih bersih menggunakan kombinasi chemical whitening dan UV curing box, dipadukan pembersihan mendalam upper kulit asli tanpa perendaman air.
                    </p>
                </div>
                <div class="flex-shrink-0 w-full md:w-auto">
                    <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin konsultasi treatment Midsole Unyellowing & Deep Clean seperti kasus Air Jordan 1.') }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-amber-500 hover:bg-amber-600 active:scale-95 text-slate-950 font-bold text-xs sm:text-sm shadow-lg shadow-amber-500/20 transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        <span>Konsultasi Kasus Serupa</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Trust Counters -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center pt-8 border-t border-slate-800">
            <div>
                <p class="text-3xl font-black text-white">Ratusan+</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">Pasang Sepatu Dirawat</p>
            </div>
            <div>
                <p class="text-3xl font-black text-amber-400">100%</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">pH-Neutral Formula</p>
            </div>
            <div>
                <p class="text-3xl font-black text-white">3–5</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">Hari Estimasi Pengerjaan</p>
            </div>
            <div>
                <p class="text-3xl font-black text-emerald-400">Zero</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">Submersion Technique</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Proof & Testimonials (DRAFT PLACEHOLDER — belum terverifikasi) -->
<section id="testimoni" class="py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900">Apa Kata Mereka?</h2>
            <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                Pengalaman pelanggan yang telah mempercayakan perawatan sepatunya di SOLECRAFT.
            </p>
            <p class="text-xs text-slate-400 italic mt-2">
                *Contoh format ulasan pelanggan SOLECRAFT
            </p>
        </div>

        {{-- DRAFT PLACEHOLDER: Ganti testimoni di bawah ini dengan review asli pelanggan SOLECRAFT --}}
        {{-- Jangan gunakan label "terverifikasi" sampai review benar-benar asli --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 (PLACEHOLDER) -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="flex gap-1 mb-3">
                    @for($s = 0; $s < 5; $s++)
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Sepatu Nike AF1 putih saya yang sudah kuning dan kotor parah bisa balik bersih seperti baru. Pengerjaannya rapi dan tepat waktu."</p>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">P</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Pelanggan SOLECRAFT</p>
                        <p class="text-xs text-slate-500">Nike Air Force 1 · White Treatment</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 (PLACEHOLDER) -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="flex gap-1 mb-3">
                    @for($s = 0; $s < 5; $s++)
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Suede boots saya yang sudah ada bintik jamur ditangani sangat hati-hati. Hasilnya halus lagi dan warnanya pekat. Recommended banget."</p>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">P</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Pelanggan SOLECRAFT</p>
                        <p class="text-xs text-slate-500">Suede Boots · Suede Care</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 (PLACEHOLDER) -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="flex gap-1 mb-3">
                    @for($s = 0; $s < 5; $s++)
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Sol Converse saya yang mengelupas parah ternyata masih bisa direkatkan kembali. Pengerjaannya detail dan hasilnya kokoh. Sangat puas."</p>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">P</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Pelanggan SOLECRAFT</p>
                        <p class="text-xs text-slate-500">Converse Canvas · Sole Reglue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Official Payment Methods & Security Strip -->
<section class="py-12 bg-white border-t border-slate-200/80" aria-label="Metode Pembayaran dan Jaminan Keamanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-xs sm:text-sm font-bold tracking-wider uppercase text-slate-500 mb-6 flex items-center justify-center gap-2">
            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            Metode Pembayaran Resmi &amp; Terverifikasi
        </p>

        <!-- Payment Badges Strip -->
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6">
            <!-- QRIS -->
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs hover:border-slate-300 transition-colors">
                <span class="font-black text-xs tracking-wider text-slate-900">QRIS</span>
                <span class="text-xs text-slate-600 font-medium border-l border-slate-200 pl-2">Semua E-Wallet</span>
            </div>

            <!-- BCA -->
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs hover:border-slate-300 transition-colors">
                <span class="font-black text-xs tracking-wider text-blue-700">BCA</span>
                <span class="text-xs text-slate-600 font-medium border-l border-slate-200 pl-2">Virtual Account / Transfer</span>
            </div>

            <!-- Mandiri -->
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs hover:border-slate-300 transition-colors">
                <span class="font-black text-xs tracking-wider text-amber-700">MANDIRI</span>
                <span class="text-xs text-slate-600 font-medium border-l border-slate-200 pl-2">Bank Transfer</span>
            </div>

            <!-- GoPay -->
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs hover:border-slate-300 transition-colors">
                <span class="font-black text-xs tracking-wider text-sky-600">GoPay</span>
                <span class="text-xs text-slate-600 font-medium border-l border-slate-200 pl-2">Instant Pay</span>
            </div>

            <!-- OVO -->
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200/80 shadow-2xs hover:border-slate-300 transition-colors">
                <span class="font-black text-xs tracking-wider text-purple-700">OVO</span>
                <span class="text-xs text-slate-600 font-medium border-l border-slate-200 pl-2">Cashless</span>
            </div>
        </div>

        <p class="text-[11px] sm:text-xs text-slate-500 mt-5 flex items-center justify-center gap-1.5 font-medium">
            <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            Transaksi 100% Aman &amp; Transparan &bull; Nota Digital Resmi Diterbitkan Setiap Selesai Treatment
        </p>
    </div>
</section>

<!-- FAQ Section (Interactive Accordion) -->
<section id="faq" class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 flex flex-col items-center">
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900">Frequently Asked Questions</h2>
            <p class="text-sm text-slate-600 mt-2.5">Jawaban untuk pertanyaan yang sering diajukan seputar layanan perawatan sepatu SOLECRAFT.</p>
        </div>

        <div class="space-y-3" id="faq-accordion">
            <!-- FAQ 1 -->
            <div class="faq-item rounded-2xl bg-white border border-slate-200 overflow-hidden">
                <button type="button" class="faq-trigger w-full flex items-center justify-between p-5 text-left group">
                    <span class="text-sm font-bold text-slate-800 pr-4">Apakah chemical yang digunakan aman untuk bahan suede dan kulit asli?</span>
                    <svg class="faq-toggle-icon w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-sm text-slate-600 leading-relaxed pb-5">
                        SOLECRAFT menggunakan formula pH-Neutral yang disesuaikan dengan karakter material. Bahan sensitif seperti suede dan nubuck ditangani dengan foam khusus non-air dan sikat bulu halus, tanpa perendaman. Kulit asli mendapatkan treatment leather conditioner untuk menjaga kelenturan alami. <span class="text-amber-600 font-semibold">(Pastikan review klaim ini sesuai dengan produk chemical yang digunakan workshop Anda sebelum dipublikasikan.)</span>
                    </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item rounded-2xl bg-white border border-slate-200 overflow-hidden">
                <button type="button" class="faq-trigger w-full flex items-center justify-between p-5 text-left group">
                    <span class="text-sm font-bold text-slate-800 pr-4">Berapa lama estimasi pengerjaan?</span>
                    <svg class="faq-toggle-icon w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-sm text-slate-600 leading-relaxed pb-5">
                        Pengerjaan reguler membutuhkan waktu 3–5 hari kerja, tergantung jenis layanan dan tingkat kesulitan. Layanan seperti reglue sol atau unyellowing midsole membutuhkan waktu pengeringan optimal yang tidak bisa dipercepat tanpa mengorbankan kualitas.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item rounded-2xl bg-white border border-slate-200 overflow-hidden">
                <button type="button" class="faq-trigger w-full flex items-center justify-between p-5 text-left group">
                    <span class="text-sm font-bold text-slate-800 pr-4">Apakah ada layanan antar-jemput / kurir?</span>
                    <svg class="faq-toggle-icon w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-sm text-slate-600 leading-relaxed pb-5">
                        Untuk saat ini, silakan hubungi kami via WhatsApp untuk mengatur pengiriman sepatu atau jadwal drop-off langsung ke workshop. <span class="text-amber-600 font-semibold">(Sesuaikan dengan kebijakan kurir/jemput yang berlaku di bisnis Anda.)</span>
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item rounded-2xl bg-white border border-slate-200 overflow-hidden">
                <button type="button" class="faq-trigger w-full flex items-center justify-between p-5 text-left group">
                    <span class="text-sm font-bold text-slate-800 pr-4">Bagaimana jika sepatu saya memiliki beberapa masalah sekaligus?</span>
                    <svg class="faq-toggle-icon w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-sm text-slate-600 leading-relaxed pb-5">
                        Sistem diagnosa kami memungkinkan Anda memilih beberapa keluhan sekaligus pada langkah ke-3. Algoritma akan merekomendasikan layanan yang paling kompatibel dengan semua kondisi tersebut secara bersamaan. Jika tidak ada layanan standar yang cocok, kami akan menyarankan konsultasi langsung via WhatsApp untuk solusi custom.
                    </p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item rounded-2xl bg-white border border-slate-200 overflow-hidden">
                <button type="button" class="faq-trigger w-full flex items-center justify-between p-5 text-left group">
                    <span class="text-sm font-bold text-slate-800 pr-4">Apakah ada garansi pengerjaan?</span>
                    <svg class="faq-toggle-icon w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer px-5">
                    <p class="text-sm text-slate-600 leading-relaxed pb-5">
                        Hubungi kami via WhatsApp untuk mengetahui detail kebijakan garansi yang berlaku. <span class="text-amber-600 font-semibold">(Sesuaikan dengan kebijakan garansi resmi bisnis Anda sebelum dipublikasikan.)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workshop / Contact Section -->
<section id="workshop" class="py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-xs font-bold text-amber-700 uppercase tracking-widest">Atelier Location</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Kunjungi SOLECRAFT Workshop</h2>
                <p class="text-sm text-slate-600 mt-2.5 leading-relaxed">
                    Workshop kami dilengkapi peralatan profesional, drying cabinet khusus, dan chemical grade khusus pH-neutral untuk penanganan material sepatu premium Anda.
                </p>

                <div class="mt-8 space-y-5">
                    <div class="flex items-start gap-3.5">
                        <div class="w-11 h-11 rounded-xl bg-slate-900 text-amber-400 flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Alamat &amp; Titik Drop-Off</p>
                            <p class="text-sm text-slate-800 font-semibold mt-1 leading-relaxed">
                                {{ config('app.workshop_address') }}
                            </p>
                            <div class="mt-2.5 flex items-center gap-2">
                                <a href="https://maps.google.com/?q={{ urlencode(config('app.workshop_address')) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold hover:bg-amber-100 transition-colors shadow-2xs">
                                    <svg class="w-3.5 h-3.5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    <span>Buka Rute di Google Maps</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5">
                        <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Jam Operasional &amp; Janji Temu</p>
                            <p class="text-sm text-slate-800 font-semibold mt-1">
                                {{ config('app.workshop_hours') }}
                            </p>
                            <p class="text-xs text-slate-500 mt-0.5">Menerima drop-off langsung ke workshop maupun pengiriman via kurir online/ekspedisi.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5">
                        <div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Customer Service &amp; Konsultasi</p>
                            <p class="text-sm font-extrabold text-slate-900 mt-1">+62 858-1099-3812</p>
                            <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya mau tanya jadwal drop-off dan lokasi workshop.') }}" target="_blank" rel="noopener noreferrer" class="mt-1 inline-flex items-center gap-1 text-xs text-emerald-600 hover:text-emerald-700 font-bold transition-colors">Chat WhatsApp Sekarang &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900 rounded-3xl p-6 sm:p-7 border border-slate-800 text-white shadow-xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute -top-24 -right-24 w-60 h-60 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div>
                    <div class="flex items-center justify-between gap-2 pb-4 border-b border-slate-800/80">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span class="text-xs font-bold text-slate-300 tracking-wide uppercase">Titik Lokasi Workshop</span>
                        </div>
                        <span class="text-[11px] px-2.5 py-0.5 rounded-full bg-slate-800 text-amber-400 font-semibold border border-slate-700">Bekasi Selatan</span>
                    </div>

                    <div class="mt-4 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950 aspect-[16/10] relative shadow-inner">
                        <iframe
                            class="w-full h-full filter saturate-[0.9] contrast-[1.05]"
                            title="Lokasi SOLECRAFT Workshop"
                            loading="lazy"
                            allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://maps.google.com/maps?q={{ urlencode(config('app.workshop_address')) }}&t=&z=16&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>

                    <div class="mt-4 text-xs text-slate-300 leading-relaxed">
                        <p class="font-medium text-slate-200">Panduan Drop-Off Sepatu:</p>
                        <p class="text-slate-400 mt-1 text-[12px]">Drop-off dapat dilakukan langsung ke workshop kami atau via kurir (Gosend / GrabExpress / Paxel). Hubungi CS untuk jadwal janji temu atau koordinasi paket.</p>
                    </div>
                </div>

                <div class="mt-6 pt-5 border-t border-slate-800/80 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="https://maps.google.com/?q={{ urlencode(config('app.workshop_address')) }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-xs border border-slate-700 transition-colors shadow-xs">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        <span>Buka Google Maps</span>
                    </a>
                    <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, boleh minta share location presisi workshop di Jl. Irigasi Gang Penganten untuk drop-off sepatu?') }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>Share Loc via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
/**
 * SOLECRAFT Pure Vanilla JS Recommendation Client
 * Adheres to:
 * - LocalStorage sync (solecraft_recommendation_form)
 * - Fetch API with CSRF
 * - Dynamic active ring states
 * - Error and Empty State handling
 * - Deterministic result cards with WhatsApp CTA
 */
document.addEventListener('DOMContentLoaded', () => {
    const STORAGE_KEY = 'solecraft_recommendation_form';
    const form = document.getElementById('recommendation-form');
    const btnReset = document.getElementById('btn-reset');
    const btnSubmit = document.getElementById('btn-submit');
    const btnSubmitText = document.getElementById('btn-submit-text');
    const btnSubmitSpinner = document.getElementById('btn-submit-spinner');
    const formAlert = document.getElementById('form-alert');

    // State views
    const hasilRekomendasi = document.getElementById('hasil-rekomendasi');
    const stateLoading = document.getElementById('state-loading');
    const stateSuccess = document.getElementById('state-success');
    const stateEmpty = document.getElementById('state-empty');
    const emptyMessage = document.getElementById('empty-state-message');
    const btnConsultationWa = document.getElementById('btn-consultation-wa');
    const resultsCountBadge = document.getElementById('results-count-badge');
    const resultsCountText = document.getElementById('results-count-text');

    const defaultWhatsapp = '{{ config('app.whatsapp_number', $whatsappNumber) }}';

    // Helper: Safe LocalStorage
    const safeStorage = {
        get() {
            try {
                const data = localStorage.getItem(STORAGE_KEY);
                return data ? JSON.parse(data) : null;
            } catch (e) {
                console.warn('LocalStorage unavailable:', e);
                return null;
            }
        },
        set(data) {
            try {
                localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
            } catch (e) {
                console.warn('LocalStorage save failed:', e);
            }
        },
        clear() {
            try {
                localStorage.removeItem(STORAGE_KEY);
            } catch (e) {
                console.warn('LocalStorage clear failed:', e);
            }
        }
    };

    // Update active ring style for option cards and dynamic step progress
    function refreshSelectionStyles() {
        // Radio inputs (shoe_type and material)
        form.querySelectorAll('input[type="radio"]').forEach(radio => {
            const card = radio.closest('.card-option');
            if (!card) return;
            if (radio.checked) {
                card.classList.add('is-selected');
            } else {
                card.classList.remove('is-selected');
            }
        });

        // Checkbox inputs (issues)
        form.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            const card = checkbox.closest('.card-option');
            const indicator = card ? card.querySelector('.checkbox-indicator') : null;
            if (!card) return;

            if (checkbox.checked) {
                card.classList.add('is-selected');
                if (indicator) {
                    indicator.classList.remove('text-transparent', 'bg-white', 'border-slate-300');
                    indicator.classList.add('text-white', 'bg-slate-900', 'border-slate-900');
                }
            } else {
                card.classList.remove('is-selected');
                if (indicator) {
                    indicator.classList.remove('text-white', 'bg-slate-900', 'border-slate-900');
                    indicator.classList.add('text-transparent', 'bg-white', 'border-slate-300');
                }
            }
        });

        // Dynamic Step Progress Indicator
        const stepNav1 = document.getElementById('step-nav-1');
        const stepBadge1 = document.getElementById('step-badge-1');
        const stepNav2 = document.getElementById('step-nav-2');
        const stepBadge2 = document.getElementById('step-badge-2');
        const stepNav3 = document.getElementById('step-nav-3');
        const stepBadge3 = document.getElementById('step-badge-3');

        const hasType = !!form.querySelector('input[name="shoe_type"]:checked');
        const hasMaterial = !!form.querySelector('input[name="material"]:checked');
        const hasIssues = form.querySelectorAll('input[name="issues[]"]:checked').length > 0;

        if (stepNav1 && stepBadge1) {
            if (hasType) {
                stepNav1.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-emerald-500 text-emerald-700 shadow-sm transition-all';
                stepBadge1.className = 'w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge1.innerHTML = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>';
            } else {
                stepNav1.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-slate-900 text-slate-900 shadow-sm transition-all';
                stepBadge1.className = 'w-6 h-6 rounded-full bg-slate-900 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge1.textContent = '1';
            }
        }

        if (stepNav2 && stepBadge2) {
            if (hasMaterial) {
                stepNav2.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-emerald-500 text-emerald-700 shadow-sm transition-all';
                stepBadge2.className = 'w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge2.innerHTML = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>';
            } else if (hasType) {
                stepNav2.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-slate-900 text-slate-900 shadow-sm transition-all';
                stepBadge2.className = 'w-6 h-6 rounded-full bg-slate-900 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge2.textContent = '2';
            } else {
                stepNav2.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border border-slate-200 text-slate-500 shadow-sm transition-all';
                stepBadge2.className = 'w-6 h-6 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge2.textContent = '2';
            }
        }

        if (stepNav3 && stepBadge3) {
            if (hasIssues) {
                stepNav3.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-emerald-500 text-emerald-700 shadow-sm transition-all';
                stepBadge3.className = 'w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge3.innerHTML = '<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>';
            } else if (hasType && hasMaterial) {
                stepNav3.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border-2 border-slate-900 text-slate-900 shadow-sm transition-all';
                stepBadge3.className = 'w-6 h-6 rounded-full bg-slate-900 text-white flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge3.textContent = '3';
            } else {
                stepNav3.className = 'flex items-center justify-center sm:justify-start gap-2 p-2 sm:px-4 rounded-xl bg-white border border-slate-200 text-slate-500 shadow-sm transition-all';
                stepBadge3.className = 'w-6 h-6 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-[11px] font-bold flex-shrink-0 transition-colors';
                stepBadge3.textContent = '3';
            }
        }

        updateProgressBar();
    }

    // Save current form inputs to localStorage
    function saveFormToStorage() {
        const formData = new FormData(form);
        const shoeType = formData.get('shoe_type') || '';
        const material = formData.get('material') || '';
        const issues = formData.getAll('issues[]');

        safeStorage.set({
            shoe_type: shoeType,
            material: material,
            issues: issues
        });
    }

    // Restore form inputs from localStorage on load
    function restoreFormFromStorage() {
        const saved = safeStorage.get();
        if (!saved) return;

        if (saved.shoe_type) {
            const radio = form.querySelector(`input[name="shoe_type"][value="${saved.shoe_type}"]`);
            if (radio) radio.checked = true;
        }

        if (saved.material) {
            const radio = form.querySelector(`input[name="material"][value="${saved.material}"]`);
            if (radio) radio.checked = true;
        }

        if (Array.isArray(saved.issues)) {
            saved.issues.forEach(issueVal => {
                const check = form.querySelector(`input[name="issues[]"][value="${issueVal}"]`);
                if (check) check.checked = true;
            });
        }

        refreshSelectionStyles();
    }

    // Clear validation error text
    function clearErrors() {
        formAlert.classList.add('hidden');
        formAlert.textContent = '';
        ['shoe_type', 'material', 'issues'].forEach(field => {
            const errEl = document.getElementById(`error-${field}`);
            if (errEl) {
                errEl.classList.add('hidden');
                errEl.textContent = '';
            }
        });
    }

    // Display validation errors
    function displayErrors(errors) {
        clearErrors();
        let firstErrorMessage = '';

        for (const [key, messages] of Object.entries(errors)) {
            const baseKey = key.split('.')[0];
            const errEl = document.getElementById(`error-${baseKey}`);
            if (errEl) {
                errEl.textContent = messages[0];
                errEl.classList.remove('hidden');
            }
            if (!firstErrorMessage && messages.length > 0) {
                firstErrorMessage = messages[0];
            }
        }

        if (firstErrorMessage) {
            formAlert.textContent = firstErrorMessage;
            formAlert.classList.remove('hidden');
        }
    }

    // Show specific UI view state
    function setViewState(state) {
        stateLoading.classList.add('hidden');
        stateSuccess.classList.add('hidden');
        stateEmpty.classList.add('hidden');
        resultsCountBadge.classList.add('hidden');

        if (state === 'hidden' || !state) {
            if (hasilRekomendasi) hasilRekomendasi.classList.add('hidden');
            return;
        }

        if (hasilRekomendasi) hasilRekomendasi.classList.remove('hidden');

        if (state === 'loading') stateLoading.classList.remove('hidden');
        if (state === 'success') {
            stateSuccess.classList.remove('hidden');
            resultsCountBadge.classList.remove('hidden');
        }
        if (state === 'empty') stateEmpty.classList.remove('hidden');
    }

    // Build URL-encoded WhatsApp booking link
    function buildWhatsAppLink(number, shoeType, material, issues, serviceName, price) {
        const issuesStr = Array.isArray(issues) ? issues.join(', ') : (issues || '-');

        // Normalize price format to ensure "Rp [Harga]"
        let priceStr = '';
        if (typeof price === 'string') {
            const cleanStr = price.trim();
            if (cleanStr.startsWith('Rp')) {
                priceStr = cleanStr;
            } else {
                const numeric = parseFloat(cleanStr.replace(/[^0-9.-]+/g, ''));
                priceStr = !isNaN(numeric) ? 'Rp ' + numeric.toLocaleString('id-ID') : 'Rp ' + cleanStr;
            }
        } else if (typeof price === 'number') {
            priceStr = 'Rp ' + price.toLocaleString('id-ID');
        } else {
            priceStr = 'Rp -';
        }

        const text = `Halo Admin SOLECRAFT, saya ingin konsultasi dan pesan layanan treatment sepatu.
- Bahan: ${material || '-'}
- Keluhan: ${issuesStr}
- Rekomendasi: ${serviceName} (${priceStr})
Apakah slot pengerjaan masih tersedia?`;

        return `https://wa.me/${number}?text=${encodeURIComponent(text)}`;
    }

    // Build consultation WhatsApp link for fallback state
    function buildConsultationWhatsAppLink(number, shoeType, material, issues) {
        const issuesStr = Array.isArray(issues) ? issues.join(', ') : (issues || '-');
        const text = `Halo Admin SOLECRAFT, saya ingin konsultasi dan pesan layanan treatment sepatu.
- Bahan: ${material || '-'}
- Keluhan: ${issuesStr}
- Rekomendasi: Konsultasi Khusus Spesialis
Apakah slot pengerjaan masih tersedia?`;
        return `https://wa.me/${number}?text=${encodeURIComponent(text)}`;
    }

    // Render result cards into DOM
    function renderResults(recommendations, userInput, whatsappNum) {
        stateSuccess.innerHTML = '';
        const number = whatsappNum || defaultWhatsapp;

        resultsCountText.textContent = recommendations.length;

        recommendations.forEach((item, index) => {
            const badgeClass = item.badge_color === 'green'
                ? 'badge-green'
                : (item.badge_color === 'blue' ? 'badge-blue' : 'badge-yellow');

            const barColor = item.badge_color === 'green'
                ? 'bg-emerald-500'
                : (item.badge_color === 'blue' ? 'bg-sky-500' : 'bg-amber-500');

            const textColor = item.badge_color === 'green'
                ? 'text-emerald-700'
                : (item.badge_color === 'blue' ? 'text-sky-700' : 'text-amber-700');

            const isTopMatch = index === 0;
            const waLink = buildWhatsAppLink(
                number,
                userInput.shoe_type,
                userInput.material,
                userInput.issues,
                item.name,
                item.formatted_price || item.price
            );

            // Compute contextual reasons why this service was selected
            const matchedIssues = (userInput.issues || []).filter(iss => (item.target_issues || []).includes(iss));
            const issueReason = matchedIssues.length > 0
                ? `Menangani kendala: <strong>${matchedIssues.join(', ')}</strong>`
                : `Menunjang pemulihan kebersihan &amp; perawatan material`;

            const isMaterialSupported = (item.supported_materials || []).includes(userInput.material);
            const materialReason = isMaterialSupported
                ? `Formula pH-neutral aman untuk material <strong>${userInput.material}</strong>`
                : `Kompatibel dengan material <strong>${userInput.material}</strong>`;

            const typeReason = `Metode penanganan sesuai struktur <strong>${userInput.shoe_type}</strong>`;

            const cardHtml = `
                <div class="p-6 sm:p-7 rounded-2xl bg-white border-2 ${isTopMatch ? 'border-slate-900 shadow-xl shadow-slate-900/10 ring-1 ring-slate-900' : 'border-slate-200/90 shadow-sm'} flex flex-col justify-between relative transition-all duration-200 hover:-translate-y-1 hover:shadow-md">
                    ${isTopMatch ? '<div class="absolute -top-3.5 left-6 px-3.5 py-1 rounded-full bg-slate-900 text-amber-300 text-[11px] font-extrabold uppercase tracking-wider shadow-md border border-slate-800 flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-amber-400 fill-amber-400" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg> Rekomendasi Utama</div>' : ''}
                    <div>
                        <div class="flex items-start justify-between gap-3 mb-2.5">
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900 leading-snug">${item.name}</h3>
                            <span class="px-3 py-1 rounded-full text-xs font-bold ${badgeClass} flex-shrink-0">
                                ${item.percentage}% Cocok
                            </span>
                        </div>

                        <!-- Match Progress Bar -->
                        <div class="mb-4">
                            <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                <div class="h-full rounded-full ${barColor}" style="width: ${item.percentage}%"></div>
                            </div>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-600 mb-4 leading-relaxed">
                            ${item.description}
                        </p>

                        <!-- Why this service is recommended -->
                        <div class="mb-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 space-y-2 text-xs">
                            <div class="text-[10px] font-extrabold uppercase tracking-wider text-slate-500">Kesesuaian Treatment:</div>
                            <div class="flex items-start gap-2 text-slate-700">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span class="leading-tight">${materialReason}</span>
                            </div>
                            <div class="flex items-start gap-2 text-slate-700">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span class="leading-tight">${issueReason}</span>
                            </div>
                            <div class="flex items-start gap-2 text-slate-700">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span class="leading-tight">${typeReason}</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-2.5 mb-4 p-3.5 rounded-xl bg-slate-50 border border-slate-100 text-xs">
                            <div>
                                <span class="text-slate-400 block text-[11px] font-medium">Estimasi Waktu</span>
                                <strong class="text-slate-800 font-bold flex items-center gap-1 mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    ${item.estimated_days} Hari Kerja
                                </strong>
                            </div>
                            <div>
                                <span class="text-slate-400 block text-[11px] font-medium">Tarif Layanan</span>
                                <strong class="text-slate-900 font-extrabold text-base block mt-0.5">
                                    ${item.formatted_price}
                                </strong>
                            </div>
                        </div>

                        <div class="mb-4 space-y-2">
                            <div>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Solusi Masalah Terkait:</span>
                                <div class="flex flex-wrap gap-1.5 mt-1.5">
                                    ${(item.target_issues || []).map(iss => `<span class="text-xs font-semibold px-2.5 py-0.5 rounded-md bg-white text-slate-700 border border-slate-200 shadow-2xs">${iss}</span>`).join('')}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <a href="${waLink}" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 active:scale-[0.99] rounded-xl shadow-sm hover:shadow-md transition-all">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Booking via WhatsApp</span>
                        </a>
                    </div>
                </div>
            `;
            stateSuccess.insertAdjacentHTML('beforeend', cardHtml);
        });

        setViewState('success');
    }

    // Form change event: save to localStorage & refresh styles
    form.addEventListener('change', () => {
        refreshSelectionStyles();
        saveFormToStorage();
        clearErrors();
    });

    // Keyboard accessibility for card options (Enter / Space)
    form.querySelectorAll('.card-option').forEach(card => {
        card.addEventListener('keydown', (e) => {
            if (e.key === ' ' || e.key === 'Enter') {
                e.preventDefault();
                const input = card.querySelector('input');
                if (!input) return;
                if (input.type === 'radio') {
                    input.checked = true;
                } else if (input.type === 'checkbox') {
                    input.checked = !input.checked;
                }
                input.dispatchEvent(new Event('change', { bubbles: true }));
            }
        });
    });

    // Reset button
    btnReset.addEventListener('click', () => {
        form.reset();
        safeStorage.clear();
        refreshSelectionStyles();
        clearErrors();
        setViewState('hidden');
    });

    // Form submit event via Fetch API
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        clearErrors();

        const formData = new FormData(form);
        const shoeType = formData.get('shoe_type');
        const material = formData.get('material');
        const issues = formData.getAll('issues[]');

        // Client-side pre-validation
        const clientErrors = {};
        if (!shoeType) clientErrors.shoe_type = ['Silakan pilih tipe sepatu.'];
        if (!material) clientErrors.material = ['Silakan pilih bahan sepatu.'];
        if (issues.length === 0) clientErrors.issues = ['Pilih minimal satu keluhan perawatan sepatu.'];

        if (Object.keys(clientErrors).length > 0) {
            displayErrors(clientErrors);
            return;
        }

        // Loading state & reveal results section smoothly
        btnSubmit.disabled = true;
        btnSubmitText.textContent = 'Menganalisis Treatment Terbaik...';
        btnSubmitSpinner.classList.remove('hidden');
        setViewState('loading');

        if (hasilRekomendasi) {
            hasilRekomendasi.scrollIntoView({ behavior: 'smooth' });
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        try {
            const response = await fetch('{{ route("recommendation.process") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    shoe_type: shoeType,
                    material: material,
                    issues: issues,
                })
            });

            const data = await response.json();

            if (!response.ok) {
                if (response.status === 422 && data.errors) {
                    displayErrors(data.errors);
                    setViewState('hidden');
                } else {
                    formAlert.textContent = 'Terjadi kendala saat memproses rekomendasi. Silakan coba lagi.';
                    formAlert.classList.remove('hidden');
                    setViewState('hidden');
                }
                return;
            }

            if (data.has_recommendations && data.data && data.data.length > 0) {
                renderResults(data.data, data.user_input, data.whatsapp_number);
            } else {
                // Empty state fallback
                if (data.fallback_message) {
                    emptyMessage.textContent = data.fallback_message;
                }
                const number = data.whatsapp_number || defaultWhatsapp;
                btnConsultationWa.href = buildConsultationWhatsAppLink(number, shoeType, material, issues);
                setViewState('empty');
            }

        } catch (error) {
            console.error('Fetch error:', error);
            formAlert.textContent = 'Gagal menghubungi server. Pastikan koneksi internet Anda stabil.';
            formAlert.classList.remove('hidden');
            setViewState('hidden');
        } finally {
            btnSubmit.disabled = false;
            btnSubmitText.textContent = 'Dapatkan Rekomendasi Treatment';
            btnSubmitSpinner.classList.add('hidden');
        }
    });

    // ==========================================
    // SOLECRAFT Pricelist Tabs & Instant Search
    // ==========================================
    const pricelistTabs = document.querySelectorAll('.pricelist-tab');
    const pricelistCards = document.querySelectorAll('.pricelist-card');
    const pricelistSearch = document.getElementById('pricelist-search');
    const pricelistNoResults = document.getElementById('pricelist-no-results');

    let currentCategory = 'all';
    let currentSearchQuery = '';

    function filterPricelist() {
        let visibleCount = 0;
        const query = currentSearchQuery.trim().toLowerCase();

        pricelistCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = (card.getAttribute('data-title') || '').toLowerCase();
            const textContent = card.innerText.toLowerCase();

            const matchCategory = (currentCategory === 'all' || category === currentCategory);
            const matchSearch = (!query || title.includes(query) || textContent.includes(query));

            if (matchCategory && matchSearch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        if (pricelistNoResults) {
            if (visibleCount === 0) {
                pricelistNoResults.classList.remove('hidden');
            } else {
                pricelistNoResults.classList.add('hidden');
            }
        }
    }

    if (pricelistTabs.length > 0) {
        const cardsContainer = document.getElementById('pricelist-cards-container');
        pricelistTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                pricelistTabs.forEach(t => {
                    t.classList.remove('active', 'bg-slate-900', 'text-white', 'shadow-sm');
                    t.classList.add('bg-white', 'text-slate-700', 'border', 'border-slate-200');
                });
                tab.classList.add('active', 'bg-slate-900', 'text-white', 'shadow-sm');
                tab.classList.remove('bg-white', 'text-slate-700', 'border', 'border-slate-200');

                currentCategory = tab.getAttribute('data-filter') || 'all';

                if (cardsContainer) {
                    cardsContainer.classList.add('opacity-40', 'transition-opacity', 'duration-150');
                    setTimeout(() => {
                        filterPricelist();
                        cardsContainer.classList.remove('opacity-40');
                    }, 120);
                } else {
                    filterPricelist();
                }
            });
        });
    }

    if (pricelistSearch) {
        pricelistSearch.addEventListener('input', (e) => {
            currentSearchQuery = e.target.value;
            filterPricelist();
        });
    }

    // Initialize state on page load
    restoreFormFromStorage();

    // ==== FAQ Accordion ====
    const faqTriggers = document.querySelectorAll('.faq-trigger');
    faqTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const item = trigger.closest('.faq-item');
            const answer = item.querySelector('.faq-answer');
            const isOpen = item.classList.contains('is-open');
            
            // Close all others
            document.querySelectorAll('.faq-item.is-open').forEach(openItem => {
                openItem.classList.remove('is-open');
                const openAnswer = openItem.querySelector('.faq-answer');
                if (openAnswer) openAnswer.style.maxHeight = null;
            });

            if (!isOpen) {
                item.classList.add('is-open');
                if (answer) answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    // ==== Diagnosis Progress Bar ====
    function updateProgressBar() {
        const progressFill = document.getElementById('progress-fill');
        const progressLabel = document.getElementById('progress-label');
        const progressPct = document.getElementById('progress-pct');
        if (!progressFill) return;

        const hasType = !!form.querySelector('input[name="shoe_type"]:checked');
        const hasMaterial = !!form.querySelector('input[name="material"]:checked');
        const hasIssues = form.querySelectorAll('input[name="issues[]"]:checked').length > 0;

        let steps = 0;
        if (hasType) steps++;
        if (hasMaterial) steps++;
        if (hasIssues) steps++;

        const pct = Math.round((steps / 3) * 100);
        progressFill.style.width = pct + '%';
        if (progressPct) progressPct.textContent = pct + '%';
        if (progressLabel) {
            const labels = [
                'Mulai diagnosa sepatu (0/3)',
                'Tipe sepatu dipilih (1/3)',
                'Material bahan dipilih (2/3)',
                'Siap mendapatkan rekomendasi! (3/3)'
            ];
            progressLabel.textContent = labels[steps] || labels[0];
        }
    }

    // ==== Interactive Before/After Slider ====
    const sliderRange = document.getElementById('before-after-range');
    const beforeWrap = document.getElementById('before-image-wrap');
    const sliderHandle = document.getElementById('slider-handle-line');

    if (sliderRange && beforeWrap && sliderHandle) {
        const updateSlider = (val) => {
            beforeWrap.style.clipPath = `polygon(0 0, ${val}% 0, ${val}% 100%, 0 100%)`;
            sliderHandle.style.left = `${val}%`;
        };
        sliderRange.addEventListener('input', (e) => {
            updateSlider(e.target.value);
        });
        // Initial sync
        updateSlider(sliderRange.value || 50);
    }

    // ==== Full Catalog Modal Handlers ====
    const modalCatalog = document.getElementById('modal-catalog');
    const btnOpenCatalog = document.getElementById('btn-open-catalog');
    const btnCloseCatalog = document.getElementById('btn-close-catalog');
    const btnCloseCatalogFooter = document.getElementById('btn-close-catalog-footer');
    const modalBackdrop = document.getElementById('modal-catalog-backdrop');

    function openCatalogModal() {
        if (!modalCatalog) return;
        modalCatalog.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
            if (pricelistSearch) pricelistSearch.focus();
        }, 100);
    }

    function closeCatalogModal() {
        if (!modalCatalog) return;
        modalCatalog.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    if (btnOpenCatalog) btnOpenCatalog.addEventListener('click', openCatalogModal);
    if (btnCloseCatalog) btnCloseCatalog.addEventListener('click', closeCatalogModal);
    if (btnCloseCatalogFooter) btnCloseCatalogFooter.addEventListener('click', closeCatalogModal);
    if (modalBackdrop) modalBackdrop.addEventListener('click', closeCatalogModal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modalCatalog && !modalCatalog.classList.contains('hidden')) {
            closeCatalogModal();
        }
    });

    // Initial update
    updateProgressBar();
});
</script>
@endpush

