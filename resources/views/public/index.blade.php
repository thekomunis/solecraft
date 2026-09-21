@extends('layouts.app')

@section('title', 'SOLECRAFT — Cuci & Perawatan Sepatu di Bekasi Selatan')
@section('meta_description', 'Jasa cuci, perawatan, dan reparasi sepatu di Bekasi Selatan. Formula pH-neutral, parfum, dan packing ziplock. Cek tarif & pesan via WhatsApp.')

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
                            <div class="absolute bottom-3 right-3 pointer-events-none">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-950/75 text-slate-200 border border-white/10 backdrop-blur-xs drop-shadow-sm">
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
            <p class="text-sm sm:text-base text-slate-600 mt-2.5 leading-relaxed">
                Rangkaian treatment favorit pelanggan SOLECRAFT dengan formula chemical pH-neutral khusus, sterilisasi lampu UV higienis, dan jaminan keamanan material.
            </p>
        </div>

        <!-- Highlight Bar (SOLECRAFT Workshop Value Propositions) -->
        <div class="mb-12 rounded-[20px] bg-slate-900 text-white p-5 sm:p-7 shadow-xl border border-slate-800">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-0 lg:divide-x lg:divide-slate-800 text-center">
                <!-- 1. Pembersihan & Parfum -->
                <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[14px] bg-[#221a11] text-amber-400 border border-amber-500/20 flex items-center justify-center mb-3 shadow-inner">
                        <svg class="w-5 h-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2.5 Q12 12 21.5 12 Q12 12 12 21.5 Q12 12 2.5 12 Q12 12 12 2.5Z"/>
                            <path d="M5.5 2 Q5.5 5.2 8.7 5.2 Q5.5 5.2 5.5 8.4 Q5.5 5.2 2.3 5.2 Q5.5 5.2 5.5 2Z"/>
                            <path d="M18.5 15.7 Q18.5 18.5 21.3 18.5 Q18.5 18.5 18.5 21.3 Q18.5 18.5 15.7 18.5 Q18.5 18.5 18.5 15.7Z"/>
                        </svg>
                    </div>
                    <p class="text-xs sm:text-sm font-bold text-slate-100 tracking-tight">Pembersihan &amp; Parfum</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Termasuk di seluruh treatment</p>
                </div>

                <!-- 2. Kemasan Ziplock Steril -->
                <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[12px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m16 16 2 2 4-4"/>
                            <path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/>
                            <path d="m7.5 4.27 9 5.15"/>
                            <path d="M3.29 7 12 12l8.71-5"/>
                            <path d="M12 22V12"/>
                        </svg>
                    </div>
                    <p class="text-xs sm:text-sm font-bold text-slate-100 tracking-tight">Kemasan Ziplock Steril</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Higienis, rapi &amp; bebas debu</p>
                </div>

                <!-- 3. Estimasi 3–5 Hari Kerja -->
                <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[12px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5"/>
                            <path d="M16 2v4"/>
                            <path d="M8 2v4"/>
                            <path d="M3 10h18"/>
                            <circle cx="16" cy="16" r="6"/>
                            <path d="M16 14v2.2l1.6 1"/>
                        </svg>
                    </div>
                    <p class="text-xs sm:text-sm font-bold text-slate-100 tracking-tight">Estimasi 3–5 Hari Kerja</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Tepat waktu sesuai jenis treatment</p>
                </div>

                <!-- 4. Penanganan Noda Berat -->
                <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[12px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M10 2v7.31"/>
                            <path d="M14 9.3V2"/>
                            <path d="M8.5 2h7"/>
                            <path d="M14 9.3a6.5 6.5 0 1 1-4 0"/>
                            <path d="M5.52 16h12.96"/>
                        </svg>
                    </div>
                    <p class="text-xs sm:text-sm font-bold text-slate-100 tracking-tight">Penanganan Noda Berat</p>
                    <p class="text-xs text-slate-400 mt-1 font-normal">Opsi treatment ekstra noda membandel &amp; jamur</p>
                </div>
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
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 mt-1">Butuh Solusi Reparasi Sol, Repaint, atau Treatment Khusus?</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                        Jelajahi seluruh menu perawatan presisi kami—mulai dari jahit &amp; reglue sol, recolour material kulit &amp; suede, unyellowing midsole, hingga perawatan khusus footwear formal &amp; anak.
                    </p>
                </div>
                <button type="button" id="btn-open-catalog" class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 active:scale-95 text-white font-bold text-xs sm:text-sm shadow-md hover:shadow-lg transition-all cursor-pointer">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    <span>Buka Semua {{ $services->count() }} Layanan</span>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Full Catalog Modal (Layanan & Tarif) -->
<div id="modal-catalog" class="fixed inset-0 z-50 flex items-end sm:items-center justify-center p-0 sm:p-4 lg:p-6 overflow-hidden hidden" role="dialog" aria-modal="true" aria-labelledby="modal-catalog-title">
    <!-- Backdrop with blur -->
    <div id="modal-catalog-backdrop" class="fixed inset-0 bg-slate-950/70 backdrop-blur-xs transition-opacity cursor-pointer"></div>

    <!-- Modal Content Window / Bottom Sheet -->
    <div id="modal-catalog-panel" class="relative bg-white rounded-t-[24px] sm:rounded-[24px] shadow-2xl max-w-5xl w-full h-[92dvh] sm:max-h-[90dvh] flex flex-col overflow-hidden border border-slate-200/80 z-10 transition-transform duration-250 ease-out">
        
        <!-- Sticky Header -->
        <div class="sticky top-0 z-20 px-4 sm:px-6 py-4 border-b border-slate-200/80 bg-white/95 backdrop-blur-xs flex items-start justify-between gap-4">
            <div>
                <h3 id="modal-catalog-title" class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">
                    Layanan &amp; Tarif
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-0.5 font-medium">
                    {{ $services->count() }} paket perawatan, restorasi, dan reparasi sepatu.
                </p>
            </div>
            <button type="button" id="btn-close-catalog" class="w-11 h-11 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition-colors cursor-pointer flex-shrink-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500" aria-label="Tutup katalog">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M18 6 6 18M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Sticky Search & Filter Tabs Bar -->
        <div class="sticky top-[73px] sm:top-[81px] z-10 px-4 sm:px-6 py-3 bg-white border-b border-slate-200/80 space-y-3">
            <!-- Search Bar with Clear Button -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.3-4.3"/>
                    </svg>
                </div>
                <input type="text" id="pricelist-search" placeholder="Cari layanan, mis. suede, boots, reglue" class="w-full pl-10 pr-10 py-2.5 rounded-[12px] border border-slate-300 bg-slate-50/75 text-base sm:text-sm text-slate-900 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-amber-500/40 focus:border-amber-500 transition-all">
                <button type="button" id="btn-clear-search" class="hidden absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-700 cursor-pointer" aria-label="Bersihkan pencarian">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Filter Tabs: 1 baris horizontal scroll di HP -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs font-semibold scrollbar-none snap-x snap-mandatory" role="tablist" aria-label="Kategori Layanan">
                <button type="button" class="pricelist-tab active inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-900 text-white shadow-xs border border-slate-900 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="all" role="tab" aria-selected="true" aria-pressed="true">
                    <span class="w-2 h-2 rounded-full bg-amber-400" aria-hidden="true"></span>
                    <span>Semua</span>
                </button>
                <button type="button" class="pricelist-tab inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-100 text-slate-700 hover:bg-slate-200/70 border border-slate-200/60 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="cleaning" role="tab" aria-selected="false" aria-pressed="false">
                    <span class="w-2 h-2 rounded-full bg-blue-500" aria-hidden="true"></span>
                    <span>Cleaning Regular</span>
                </button>
                <button type="button" class="pricelist-tab inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-100 text-slate-700 hover:bg-slate-200/70 border border-slate-200/60 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="kids-women" role="tab" aria-selected="false" aria-pressed="false">
                    <span class="w-2 h-2 rounded-full bg-pink-500" aria-hidden="true"></span>
                    <span>Kids &amp; Women</span>
                </button>
                <button type="button" class="pricelist-tab inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-100 text-slate-700 hover:bg-slate-200/70 border border-slate-200/60 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="repair" role="tab" aria-selected="false" aria-pressed="false">
                    <span class="w-2 h-2 rounded-full bg-amber-500" aria-hidden="true"></span>
                    <span>Shoes Repair</span>
                </button>
                <button type="button" class="pricelist-tab inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-100 text-slate-700 hover:bg-slate-200/70 border border-slate-200/60 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="repaint" role="tab" aria-selected="false" aria-pressed="false">
                    <span class="w-2 h-2 rounded-full bg-purple-500" aria-hidden="true"></span>
                    <span>Repaint &amp; Recolour</span>
                </button>
                <button type="button" class="pricelist-tab inline-flex items-center gap-1.5 px-3.5 py-2 rounded-[12px] bg-slate-100 text-slate-700 hover:bg-slate-200/70 border border-slate-200/60 cursor-pointer whitespace-nowrap transition-all snap-start flex-shrink-0" data-filter="whitening" role="tab" aria-selected="false" aria-pressed="false">
                    <span class="w-2 h-2 rounded-full bg-emerald-500" aria-hidden="true"></span>
                    <span>Unyellowing &amp; Whitening</span>
                </button>
            </div>
        </div>

        <!-- Scrollable Service Cards List -->
        <div class="p-4 sm:p-6 overflow-y-auto flex-1 bg-slate-50/60" id="pricelist-scroll-area">
            <div id="pricelist-live-count" class="sr-only" aria-live="polite">Menampilkan {{ $services->count() }} layanan</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" id="pricelist-cards-container">
                @foreach($services as $service)
                    @php
                        $cat = 'cleaning';
                        $categoryLabel = 'Cleaning Regular';
                        $dotColor = 'bg-blue-500';
                        if (str_contains($service->slug, 'repair')) {
                            $cat = 'repair';
                            $categoryLabel = 'Shoes Repair';
                            $dotColor = 'bg-amber-500';
                        } elseif (str_contains($service->slug, 'repaint')) {
                            $cat = 'repaint';
                            $categoryLabel = 'Repaint & Recolour';
                            $dotColor = 'bg-purple-500';
                        } elseif (str_contains($service->slug, 'kids') || str_contains($service->slug, 'women')) {
                            $cat = 'kids-women';
                            $categoryLabel = 'Kids & Women';
                            $dotColor = 'bg-pink-500';
                        } elseif (str_contains($service->slug, 'unyellowing') || str_contains($service->slug, 'rewhitening') || str_contains($service->slug, 'whitening')) {
                            $cat = 'whitening';
                            $categoryLabel = 'Unyellowing & Whitening';
                            $dotColor = 'bg-emerald-500';
                        }
                        $materials = is_array($service->supported_materials) ? $service->supported_materials : [];
                        $firstThree = array_slice($materials, 0, 3);
                        $remainingCount = count($materials) - 3;
                    @endphp
                    <div class="pricelist-card group p-4 sm:p-5 rounded-[16px] bg-white border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between h-full"
                         data-category="{{ $cat }}"
                         data-title="{{ $service->name }}"
                         data-materials="{{ implode(' ', $materials) }}">
                        <div>
                            <!-- Header: Category (Left) & Estimate (Right) -->
                            <div class="flex items-center justify-between mb-2">
                                <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700">
                                    <span class="w-2 h-2 rounded-full {{ $dotColor }}" aria-hidden="true"></span>
                                    <span>{{ $categoryLabel }}</span>
                                </span>
                                @if($service->estimated_days)
                                    <span class="inline-flex items-center gap-1 text-xs font-medium text-slate-500">
                                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12 6 12 12 16 14"/>
                                        </svg>
                                        <span>{{ $service->estimated_days }} hari</span>
                                    </span>
                                @endif
                            </div>

                            <!-- Title (Max 2 lines) -->
                            <h4 class="text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors line-clamp-2">
                                {{ $service->name }}
                            </h4>

                            <!-- Description + Expand Button -->
                            <div class="service-desc-wrapper mt-1 mb-3">
                                <p class="service-desc-text text-xs text-slate-600 leading-relaxed line-clamp-2">
                                    {{ $service->description }}
                                </p>
                                <button type="button" class="btn-toggle-desc text-[11px] font-semibold text-amber-700 hover:text-amber-800 mt-1 inline-flex items-center gap-1 py-0.5 cursor-pointer" aria-expanded="false">
                                    <span>Lihat detail</span>
                                    <svg class="w-3 h-3 transition-transform desc-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="m19 9-7 7-7-7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Price, Materials & CTA (Stuck to bottom) -->
                        <div class="mt-auto pt-3 border-t border-slate-100">
                            <!-- Price -->
                            <div class="flex items-baseline justify-between mb-2">
                                <span class="text-xs text-slate-500 font-medium">Mulai dari</span>
                                <span class="text-base sm:text-lg font-extrabold text-slate-900 tracking-tight">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                            </div>

                            <!-- Materials Tags (Max 3 + N) -->
                            @if(count($materials) > 0)
                                <div class="flex flex-wrap items-center gap-1 mb-3">
                                    @foreach($firstThree as $mat)
                                        <span class="text-[10px] px-2 py-0.5 rounded-[12px] bg-slate-100 text-slate-700 font-medium">{{ $mat }}</span>
                                    @endforeach
                                    @if($remainingCount > 0)
                                        <span class="text-[10px] px-1.5 py-0.5 rounded-[12px] bg-slate-100 text-slate-500 font-medium">+{{ $remainingCount }}</span>
                                    @endif
                                </div>
                            @endif

                            <!-- CTA WhatsApp: Pesan via WA -->
                            <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin pesan layanan ' . $service->name . '.') }}" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-3.5 py-2.5 rounded-[12px] border border-emerald-600 hover:bg-emerald-50 text-emerald-700 font-bold text-xs transition-colors active:scale-[0.98]">
                                <svg class="w-4 h-4 fill-current flex-shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                                <span>Pesan via WA</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            <div id="pricelist-no-results" class="hidden py-14 text-center">
                <div class="w-12 h-12 rounded-[12px] bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.3-4.3"/>
                    </svg>
                </div>
                <h4 class="text-sm font-bold text-slate-800">Layanan tidak ditemukan</h4>
                <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">Coba gunakan kata kunci lain seperti "reglue", "suede", atau "unyellowing".</p>
                <button type="button" id="btn-reset-catalog-filter" class="mt-4 px-4 py-2 rounded-[12px] bg-slate-900 text-white font-bold text-xs hover:bg-slate-800 transition-all cursor-pointer">
                    Reset filter
                </button>
            </div>
        </div>

        <!-- Sticky Modal Footer -->
        <div class="sticky bottom-0 z-20 px-4 sm:px-6 py-3 pb-[calc(0.75rem+env(safe-area-inset-bottom))] sm:pb-3 border-t border-slate-200/80 bg-white flex flex-col sm:flex-row items-center justify-between gap-3 shadow-lg sm:shadow-none">
            <div class="text-xs text-slate-600 font-medium flex items-center gap-2 text-center sm:text-left">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 flex-shrink-0" aria-hidden="true"></span>
                <span>Semua paket termasuk sterilisasi UV, parfum, &amp; packing ziplock.</span>
            </div>
            <div class="flex items-center gap-2.5 w-full sm:w-auto justify-end">
                <button type="button" id="btn-close-catalog-footer" class="flex-1 sm:flex-initial px-4 py-2 rounded-[12px] border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs transition-colors cursor-pointer text-center">
                    Tutup
                </button>
                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin konsultasi paket perawatan dan reparasi sepatu.') }}" target="_blank" rel="noopener noreferrer" class="flex-1 sm:flex-initial px-4 py-2 rounded-[12px] bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-xs inline-flex items-center justify-center gap-1.5 transition-colors text-center">
                    <svg class="w-3.5 h-3.5 fill-current flex-shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                    </svg>
                    <span>Konsultasi via WA</span>
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
                <p class="text-3xl font-black text-white">1.000+</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">Pasang Sepatu Dirawat</p>
            </div>
            <div>
                <p class="text-3xl font-black text-amber-400">100%</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">pH-Neutral Formula</p>
            </div>
            <div>
                <p class="text-3xl font-black text-white">3–5 Hari</p>
                <p class="text-xs text-slate-400 mt-1 font-semibold">Estimasi Pengerjaan</p>
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
            <div class="inline-flex items-center gap-2 mt-3 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-xs font-semibold text-slate-700">
                <span class="text-amber-500 font-bold">★★★★★</span>
                <span>Rating 4.9/5.0 &bull; Ulasan Terverifikasi via Google Maps &amp; WhatsApp Order</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex gap-1 text-amber-400">
                            @for($s = 0; $s < 5; $s++)
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200">
                            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Google Review
                        </span>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Sepatu Nike AF1 putih saya yang sudah kuning dan kotor parah bisa balik bersih seperti baru. Pengerjaannya rapi dan tepat waktu."</p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">D</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Dimas Prasetyo</p>
                        <p class="text-xs text-slate-500">Nike Air Force 1 · White Treatment</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex gap-1 text-amber-400">
                            @for($s = 0; $s < 5; $s++)
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200">
                            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            WhatsApp Order
                        </span>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Suede boots saya yang sudah ada bintik jamur ditangani sangat hati-hati. Hasilnya halus lagi dan warnanya pekat. Recommended banget."</p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">S</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Sarah Maharani</p>
                        <p class="text-xs text-slate-500">Suede Boots · Suede Care</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex gap-1 text-amber-400">
                            @for($s = 0; $s < 5; $s++)
                            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200">
                            <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Google Review
                        </span>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed mb-4 italic">"Sol Converse saya yang mengelupas parah ternyata masih bisa direkatkan kembali. Pengerjaannya detail dan hasilnya kokoh. Sangat puas."</p>
                </div>
                <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-amber-300 flex items-center justify-center text-sm font-bold">B</div>
                    <div>
                        <p class="text-xs font-bold text-slate-800">Bayu Wicaksono</p>
                        <p class="text-xs text-slate-500">Converse Canvas · Sole Reglue</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action / Transparansi Ulasan -->
        <div class="mt-10 text-center flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="https://maps.google.com/?q={{ urlencode('Jl. Irigasi Gang Penganten No.67 RT.001a/RW.01 Pekayon Jaya, Bekasi Selatan, Kota Bekasi, Jawa Barat 17148') }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-xs font-bold text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors shadow-2xs">
                <svg class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <span>Tulis Ulasan di Google Maps</span>
            </a>
            <span class="text-xs text-slate-500 font-medium">atau bagikan ulasan kepuasan Anda via WhatsApp CS</span>
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
                        SOLECRAFT menggunakan formula pH-Neutral khusus yang diformulasikan aman untuk setiap karakteristik bahan. Material sensitif seperti suede dan nubuck dirawat menggunakan dry foam khusus tanpa perendaman air dan disikat dengan horsehair brush berbulu halus. Sedangkan untuk material kulit asli (genuine leather), kami aplikasikan premium leather conditioner guna menjaga kelembapan serta kelenturan alaminya.
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
                        Estimasi pengerjaan reguler berkisar 3–5 hari kerja, tergantung jenis layanan dan tingkat kerumitan kondisi sepatu. Layanan khusus seperti reglue sol atau unyellowing midsole memerlukan proses curing dan pengeringan optimal di drying cabinet modern kami agar daya rekat dan kecerahan bertahan maksimal.
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
                        Tentu! Kami menerima pengiriman dan penjemputan sepatu melalui kurir instan (GoSend, GrabExpress) maupun ekspedisi untuk wilayah Jabodetabek. Anda juga dipersilakan melakukan drop-off langsung ke workshop kami setiap hari pukul 09.00–21.00 WIB. Tim kami siap membantu memandu proses pengiriman via WhatsApp.
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
                        Anda dapat memilih beberapa keluhan sekaligus pada fitur Diagnosa Sepatu kami. Sistem kami secara otomatis merekomendasikan paket perawatan kombinasi terbaik dan paling efisien. Anda juga bisa berkonsultasi langsung dengan tim spesialis kami via WhatsApp CS untuk penanganan custom.
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
                        Ya, SOLECRAFT memberikan garansi pengerjaan untuk kepuasan Anda. Apabila hasil pembersihan atau pengeleman sol dirasa belum optimal, Anda dapat mengajukan garansi pengerjaan ulang (re-treatment) dalam waktu 3x24 jam setelah sepatu diterima dengan menunjukkan nota digital transaksi Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workshop / Location Section (Disempurnakan: Grid Simetris, Badge Kurir, & Tombol Aksi Rapi) -->
<section id="workshop" class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
            <!-- Left: Info Column (6 Cols on Desktop) -->
            <div class="lg:col-span-6 flex flex-col justify-between bg-white rounded-[24px] p-6 sm:p-7 border border-slate-200/90 shadow-sm">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 border border-amber-200/80 text-amber-800 text-xs font-bold uppercase tracking-wider mb-3">
                        <svg class="w-3.5 h-3.5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>Lokasi SOLECRAFT</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Kunjungi SOLECRAFT</h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                        Workshop spesialis perawatan sepatu dengan standar higienis di Pekayon Jaya. Dilengkapi drying cabinet, sterilisasi UV, dan formula pH-neutral.
                    </p>

                    <div class="mt-6 space-y-4">
                        <!-- 1. Alamat -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-amber-200 transition-colors">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-2">
                                    <p class="text-xs text-slate-500 font-semibold">Alamat Workshop</p>
                                    <button type="button" onclick="navigator.clipboard.writeText('Jl. Irigasi Gang Penganten No.67 RT.001a/RW.01 Pekayon Jaya, Bekasi Selatan, Kota Bekasi 17148'); this.innerText='Tersalin!'; setTimeout(()=>this.innerText='Salin Alamat', 2000);" class="text-[11px] font-bold text-amber-600 hover:text-amber-700 cursor-pointer">
                                        Salin Alamat
                                    </button>
                                </div>
                                <p class="text-sm font-bold text-slate-900 mt-0.5">Jl. Irigasi Gang Penganten No.67</p>
                                <p class="text-xs text-slate-600 mt-0.5 leading-relaxed">RT.001a/RW.01, Pekayon Jaya, Bekasi Selatan, Kota Bekasi 17148</p>
                            </div>
                        </div>

                        <!-- 2. Jam Buka -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-amber-200 transition-colors">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold">Jam Operasional</p>
                                <p class="text-sm font-bold text-slate-900 mt-0.5">Setiap Hari, 09.00–21.00 WIB</p>
                                <p class="text-xs text-slate-600 mt-0.5">Melayani drop-off langsung &amp; kurir online setiap hari</p>
                            </div>
                        </div>

                        <!-- 3. WhatsApp CS -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-200 transition-colors">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold">WhatsApp Konsultasi Drop-off</p>
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Halo SOLECRAFT, saya ingin konsultasi drop-off sepatu.') }}" target="_blank" rel="noopener noreferrer" class="text-sm font-extrabold text-emerald-600 hover:text-emerald-700 transition-colors mt-0.5 inline-flex items-center gap-1.5">
                                    <span>WhatsApp</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                                <p class="text-[11px] text-slate-500 mt-0.5">Respon cepat via WhatsApp CS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas Workshop Mini-Bar -->
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] font-semibold text-slate-500">
                    <span class="inline-flex items-center gap-1">✨ Drying Cabinet</span>
                    <span class="inline-flex items-center gap-1">🧪 pH-Neutral</span>
                    <span class="inline-flex items-center gap-1">☀️ UV Sterilization</span>
                </div>
            </div>

            <!-- Right: Map Card (Clean & Focused, Seamless Vertical Fill) -->
            <div class="lg:col-span-6 bg-slate-900 rounded-[24px] p-5 sm:p-6 border border-slate-800 text-white shadow-xl flex flex-col justify-between relative overflow-hidden">
                <!-- Map Embed Container filling vertical space without empty gaps -->
                <div class="relative rounded-[16px] overflow-hidden border border-slate-800 bg-slate-950 flex-1 min-h-[300px] sm:min-h-[360px] w-full shadow-inner">
                    <!-- Skeleton Shimmer Placeholder -->
                    <div id="map-skeleton" class="absolute inset-0 bg-slate-800 animate-pulse flex items-center justify-center text-slate-500 text-xs">
                        <span class="inline-flex items-center gap-2">
                            <svg class="w-4 h-4 animate-spin text-amber-500" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span>Memuat peta workshop...</span>
                        </span>
                    </div>
                    <iframe
                        class="w-full h-full filter saturate-[0.95] contrast-[1.05]"
                        title="Peta lokasi SOLECRAFT Workshop"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q={{ urlencode('Jl. Irigasi Gang Penganten No.67 RT.001a/RW.01 Pekayon Jaya, Bekasi Selatan, Kota Bekasi, Jawa Barat 17148') }}&t=&z=16&ie=UTF8&iwloc=&output=embed"
                        onload="document.getElementById('map-skeleton').classList.add('hidden')">
                    </iframe>
                </div>

                <!-- Action Button: Only Buka Google Maps (SS3 Removed) -->
                <div class="mt-4 pt-4 border-t border-slate-800/80">
                    <a href="https://maps.google.com/?q={{ urlencode('Jl. Irigasi Gang Penganten No.67 RT.001a/RW.01 Pekayon Jaya, Bekasi Selatan, Kota Bekasi, Jawa Barat 17148') }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 active:scale-[0.98] text-white font-bold text-xs sm:text-sm border border-slate-700 transition-all shadow-sm group">
                        <svg class="w-4 h-4 text-amber-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                            <polyline points="15 3 21 3 21 9"/>
                            <line x1="10" y1="14" x2="21" y2="3"/>
                        </svg>
                        <span>Buka Google Maps</span>
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
    const btnClearSearch = document.getElementById('btn-clear-search');
    const pricelistNoResults = document.getElementById('pricelist-no-results');
    const btnResetCatalogFilter = document.getElementById('btn-reset-catalog-filter');
    const pricelistLiveCount = document.getElementById('pricelist-live-count');
    const pricelistCardsContainer = document.getElementById('pricelist-cards-container');

    let currentCategory = 'all';
    let currentSearchQuery = '';

    function filterPricelist() {
        let visibleCount = 0;
        const query = currentSearchQuery.trim().toLowerCase();

        pricelistCards.forEach(card => {
            const category = card.getAttribute('data-category') || '';
            const title = (card.getAttribute('data-title') || '').toLowerCase();
            const materials = (card.getAttribute('data-materials') || '').toLowerCase();
            const textContent = card.innerText.toLowerCase();

            const matchCategory = (currentCategory === 'all' || category === currentCategory);
            const matchSearch = (!query || title.includes(query) || materials.includes(query) || textContent.includes(query));

            if (matchCategory && matchSearch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        if (pricelistNoResults) {
            pricelistNoResults.classList.toggle('hidden', visibleCount > 0);
        }

        if (pricelistLiveCount) {
            pricelistLiveCount.textContent = `Menampilkan ${visibleCount} dari ${pricelistCards.length} paket layanan.`;
        }
    }

    function setCategoryTab(category) {
        currentCategory = category;
        pricelistTabs.forEach(tab => {
            const isMatch = (tab.getAttribute('data-filter') === category);
            tab.setAttribute('aria-pressed', isMatch ? 'true' : 'false');
            tab.setAttribute('aria-selected', isMatch ? 'true' : 'false');
            if (isMatch) {
                tab.classList.add('active', 'bg-slate-900', 'text-white', 'shadow-xs', 'border-slate-900');
                tab.classList.remove('bg-slate-100', 'text-slate-700', 'border-slate-200/60');
                tab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
            } else {
                tab.classList.remove('active', 'bg-slate-900', 'text-white', 'shadow-xs', 'border-slate-900');
                tab.classList.add('bg-slate-100', 'text-slate-700', 'border-slate-200/60');
            }
        });
        filterPricelist();
    }

    if (pricelistTabs.length > 0) {
        pricelistTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const cat = tab.getAttribute('data-filter') || 'all';
                setCategoryTab(cat);
            });
        });
    }

    if (pricelistSearch) {
        pricelistSearch.addEventListener('input', (e) => {
            currentSearchQuery = e.target.value;
            if (btnClearSearch) {
                btnClearSearch.classList.toggle('hidden', !e.target.value);
            }
            filterPricelist();
        });
    }

    if (btnClearSearch) {
        btnClearSearch.addEventListener('click', () => {
            if (pricelistSearch) {
                pricelistSearch.value = '';
                pricelistSearch.focus();
            }
            currentSearchQuery = '';
            btnClearSearch.classList.add('hidden');
            filterPricelist();
        });
    }

    if (btnResetCatalogFilter) {
        btnResetCatalogFilter.addEventListener('click', () => {
            if (pricelistSearch) {
                pricelistSearch.value = '';
            }
            currentSearchQuery = '';
            if (btnClearSearch) {
                btnClearSearch.classList.add('hidden');
            }
            setCategoryTab('all');
        });
    }

    // Event delegation for "Lihat detail" inside cards
    if (pricelistCardsContainer) {
        pricelistCardsContainer.addEventListener('click', (e) => {
            const btn = e.target.closest('.btn-toggle-desc');
            if (!btn) return;
            const desc = btn.parentElement ? btn.parentElement.querySelector('.service-desc-text') : null;
            const chevron = btn.querySelector('.desc-chevron');
            const label = btn.querySelector('span');
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            if (desc) {
                if (isExpanded) {
                    desc.classList.add('line-clamp-2');
                    if (label) label.textContent = 'Lihat detail';
                    btn.setAttribute('aria-expanded', 'false');
                    if (chevron) chevron.classList.remove('rotate-180');
                } else {
                    desc.classList.remove('line-clamp-2');
                    if (label) label.textContent = 'Tutup detail';
                    btn.setAttribute('aria-expanded', 'true');
                    if (chevron) chevron.classList.add('rotate-180');
                }
            }
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

    // ==========================================
    // Full Catalog Modal & History API Handlers
    // ==========================================
    const modalCatalog = document.getElementById('modal-catalog');
    const btnOpenCatalog = document.getElementById('btn-open-catalog');
    const btnCloseCatalog = document.getElementById('btn-close-catalog');
    const btnCloseCatalogFooter = document.getElementById('btn-close-catalog-footer');
    const modalBackdrop = document.getElementById('modal-catalog-backdrop');
    let lastActiveElement = null;

    function openCatalogModal(categoryFilter = null) {
        if (!modalCatalog) return;
        lastActiveElement = document.activeElement;

        if (categoryFilter) {
            setCategoryTab(categoryFilter);
        }

        modalCatalog.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        // History API pushState so mobile Back button closes modal
        if (window.location.hash !== '#layanan') {
            history.pushState({ modal: 'catalog' }, '', '#layanan');
        }

        setTimeout(() => {
            if (pricelistSearch) pricelistSearch.focus();
        }, 120);
    }

    function closeCatalogModal(syncHistory = true) {
        if (!modalCatalog || modalCatalog.classList.contains('hidden')) return;
        modalCatalog.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');

        if (syncHistory && window.location.hash === '#layanan') {
            history.back();
        }

        if (lastActiveElement && typeof lastActiveElement.focus === 'function') {
            lastActiveElement.focus();
        }
    }

    // Expose globally for footer category links
    window.openCatalogWithCategory = function(cat) {
        openCatalogModal(cat);
    };

    if (btnOpenCatalog) btnOpenCatalog.addEventListener('click', () => openCatalogModal());
    if (btnCloseCatalog) btnCloseCatalog.addEventListener('click', () => closeCatalogModal(true));
    if (btnCloseCatalogFooter) btnCloseCatalogFooter.addEventListener('click', () => closeCatalogModal(true));
    if (modalBackdrop) modalBackdrop.addEventListener('click', () => closeCatalogModal(true));

    // Handle browser popstate (Mobile Back button)
    window.addEventListener('popstate', () => {
        if (modalCatalog && !modalCatalog.classList.contains('hidden')) {
            closeCatalogModal(false);
        }
    });

    // Keyboard navigation: Escape key & focus trap
    document.addEventListener('keydown', (e) => {
        if (modalCatalog && !modalCatalog.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeCatalogModal(true);
            } else if (e.key === 'Tab') {
                const focusable = modalCatalog.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                if (focusable.length === 0) return;
                const first = focusable[0];
                const last = focusable[focusable.length - 1];

                if (e.shiftKey && document.activeElement === first) {
                    e.preventDefault();
                    last.focus();
                } else if (!e.shiftKey && document.activeElement === last) {
                    e.preventDefault();
                    first.focus();
                }
            }
        }
    });

    // Initial update
    updateProgressBar();
});
</script>
@endpush

