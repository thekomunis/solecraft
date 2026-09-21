<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Primary Meta Tags -->
    <title>SOLECRAFT — Perawatan &amp; Restorasi Sepatu Premium di Bekasi Selatan</title>
    <meta name="description" content="Jasa cuci sepatu, deep cleaning, unyellowing sol, pengeleman sol (reglue), dan restorasi warna profesional di Bekasi Selatan. Formula ramah bahan, steril UV, dan packing ziplock.">
    <meta name="keywords" content="cuci sepatu bekasi, jasa pembersih sepatu, reglue sepatu bekasi, unyellowing sol, repaint sepatu, laundry sepatu bekasi selatan, solecraft">
    <meta name="author" content="SOLECRAFT">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0f172a">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="SOLECRAFT">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="SOLECRAFT — Perawatan Premium untuk Setiap Pasang Sepatu">
    <meta property="og:description" content="Layanan cuci mendalam, reparasi sol, dan restorasi warna sepatu profesional di Pekayon Jaya, Bekasi Selatan. Konsultasi cepat via WhatsApp.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SOLECRAFT — Perawatan Premium untuk Setiap Pasang Sepatu">
    <meta name="twitter:description" content="Layanan cuci mendalam, reparasi sol, dan restorasi warna sepatu profesional di Pekayon Jaya, Bekasi Selatan.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Compiled Assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Touch action & scrollbar utilities */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .safe-bottom { padding-bottom: max(1rem, env(safe-area-inset-bottom)); }
        
        /* Focus ring styling */
        :focus-visible {
            outline: 2px solid #d97706;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans selection:bg-amber-500 selection:text-white relative">

    @php
        $whatsappNumber = $whatsappNumber ?? config('app.whatsapp_number', env('WHATSAPP_NUMBER', '6285810993812'));
        $services = $services ?? \App\Models\Service::active()->orderBy('price', 'asc')->get();
    @endphp

    {{-- =========================================================================
         1. HEADER / NAVBAR
         ========================================================================= --}}
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-200" id="landing-navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Logo & Brand Name -->
                <a href="#hero" class="flex items-center gap-3 group focus:outline-hidden" aria-label="SOLECRAFT Beranda">
                    <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-slate-900 flex items-center justify-center text-amber-400 font-extrabold text-lg sm:text-xl shadow-md group-hover:scale-105 transition-transform">
                        SC
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 leading-tight">SOLECRAFT</span>
                        <span class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-amber-600">Shoe Care &amp; Restoration</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1 lg:gap-2" aria-label="Navigasi Utama">
                    <a href="#services" class="landing-nav-link px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors">Services</a>
                    <a href="#cara-kerja" class="landing-nav-link px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors">Cara Kerja</a>
                    <a href="#rekomendasi" class="landing-nav-link px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors">Rekomendasi</a>
                    <a href="#showcase" class="landing-nav-link px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors">Before/After</a>
                    <a href="#faq" class="landing-nav-link px-3.5 py-2 rounded-lg text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors">FAQ</a>
                </nav>

                <!-- Right Action CTA (Desktop) -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Halo%20SOLECRAFT,%20saya%20ingin%20konsultasi%20perawatan%20sepatu." 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-sm font-bold shadow-md hover:shadow-lg transition-all active:scale-[0.98]">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.54 1.771.82 2.787.82 3.18 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.806-5.764-6.006zm0 10.455c-.888 0-1.666-.25-2.338-.688l-.167-.101-1.571.412.42-1.529-.11-.175c-.477-.732-.733-1.464-.733-2.608 0-2.453 1.996-4.449 4.453-4.449 2.455 0 4.451 1.996 4.451 4.451 0 2.455-1.996 4.487-4.405 4.487zm2.443-3.328c-.134-.067-.791-.391-.913-.435-.123-.044-.213-.067-.303.067-.09.134-.347.435-.426.525-.078.09-.157.101-.291.034-.134-.067-.565-.208-1.077-.665-.398-.355-.667-.793-.745-.927-.078-.134-.008-.207.059-.273.06-.06.134-.157.202-.236.067-.078.09-.134.134-.224.045-.09.022-.169-.011-.236-.034-.067-.303-.73-.415-1-.109-.263-.22-.227-.303-.231-.078-.004-.168-.005-.257-.005s-.236.034-.359.169c-.123.134-.471.46-.471 1.122 0 .662.482 1.301.55 1.391.067.09.95 1.45 2.302 2.033.322.139.573.222.769.284.323.103.617.088.85.054.26-.039.791-.323.903-.635.112-.313.112-.581.078-.635-.033-.057-.123-.09-.257-.157z"/>
                        </svg>
                        <span>Konsultasi CS</span>
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center md:hidden">
                    <button type="button" 
                            id="landing-menu-toggle" 
                            class="inline-flex items-center justify-center p-2.5 rounded-xl text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition-colors w-11 h-11"
                            aria-label="Buka Menu Navigasi" 
                            aria-expanded="false" 
                            aria-controls="landing-mobile-drawer">
                        <svg id="landing-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="landing-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer (Smooth Transition via Vanilla JS) -->
        <div id="landing-mobile-drawer" 
             class="md:hidden overflow-hidden max-h-0 transition-[max-height,opacity] duration-300 ease-in-out opacity-0 border-t border-slate-200/80 bg-white shadow-xl">
            <div class="px-4 py-4 space-y-2">
                <a href="#services" class="landing-mobile-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    <span>Services</span>
                    <span class="text-xs text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full font-bold">23 Pilihan</span>
                </a>
                <a href="#cara-kerja" class="landing-mobile-link block px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    Cara Kerja
                </a>
                <a href="#rekomendasi" class="landing-mobile-link block px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    Rekomendasi Cerdas
                </a>
                <a href="#showcase" class="landing-mobile-link block px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    Before &amp; After
                </a>
                <a href="#faq" class="landing-mobile-link block px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    FAQ
                </a>
                <a href="#lokasi" class="landing-mobile-link block px-3.5 py-2.5 rounded-xl text-base font-semibold text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                    Lokasi SOLECRAFT
                </a>
                <div class="pt-3 border-t border-slate-100">
                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Halo%20SOLECRAFT,%20saya%20ingin%20konsultasi%20perawatan%20sepatu." 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="w-full flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.54 1.771.82 2.787.82 3.18 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.806-5.764-6.006zm0 10.455c-.888 0-1.666-.25-2.338-.688l-.167-.101-1.571.412.42-1.529-.11-.175c-.477-.732-.733-1.464-.733-2.608 0-2.453 1.996-4.449 4.453-4.449 2.455 0 4.451 1.996 4.451 4.451 0 2.455-1.996 4.487-4.405 4.487zm2.443-3.328c-.134-.067-.791-.391-.913-.435-.123-.044-.213-.067-.303.067-.09.134-.347.435-.426.525-.078.09-.157.101-.291.034-.134-.067-.565-.208-1.077-.665-.398-.355-.667-.793-.745-.927-.078-.134-.008-.207.059-.273.06-.06.134-.157.202-.236.067-.078.09-.134.134-.224.045-.09.022-.169-.011-.236-.034-.067-.303-.73-.415-1-.109-.263-.22-.227-.303-.231-.078-.004-.168-.005-.257-.005s-.236.034-.359.169c-.123.134-.471.46-.471 1.122 0 .662.482 1.301.55 1.391.067.09.95 1.45 2.302 2.033.322.139.573.222.769.284.323.103.617.088.85.054.26-.039.791-.323.903-.635.112-.313.112-.581.078-.635-.033-.057-.123-.09-.257-.157z"/>
                        </svg>
                        <span>Hubungi via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- =========================================================================
             2. HERO SECTION
             ========================================================================= --}}
        <section id="hero" class="relative overflow-hidden bg-gradient-to-b from-white via-amber-50/25 to-slate-50 border-b border-slate-200/80 pt-10 sm:pt-14 lg:pt-20 pb-16 lg:pb-24">
            <!-- Subtle backdrop aesthetic -->
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_60%_at_50%_-10%,rgba(245,158,11,0.09),rgba(255,255,255,0))] pointer-events-none"></div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                    
                    <!-- Left Column: Headline, Sub-headline, CTAs, Statistics -->
                    <div class="lg:col-span-7 text-left">
                        <!-- Overline Badge -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100/70 border border-amber-300/80 text-amber-900 text-xs font-bold mb-5 shadow-2xs">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                            <span>Workshop Spesialis Perawatan Sepatu • Bekasi Selatan</span>
                        </div>

                        <!-- Sharp Headline -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.15] mb-5">
                            Perawatan Premium untuk <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-yellow-600">Setiap Pasang Sepatu.</span>
                        </h1>

                        <!-- Sub-headline -->
                        <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed mb-8 max-w-2xl">
                            Formula pH-neutral khusus ramah material (Canvas, Suede, Leather, Knit), pembersihan menyeluruh oleh teknisi berpengalaman, sterilisasi UV antibakteri, dan proteksi packing ziplock steril.
                        </p>

                        <!-- CTA Action Buttons -->
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-4 mb-10">
                            <a href="#rekomendasi" class="inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 active:scale-[0.98] text-white font-bold text-base shadow-md hover:shadow-lg transition-all">
                                <span>Dapatkan Rekomendasi</span>
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                            <a href="#services" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 active:scale-[0.98] text-slate-800 font-bold text-base border border-slate-300/90 shadow-2xs transition-all">
                                <span>Lihat Katalog Layanan</span>
                            </a>
                        </div>

                        <!-- Deretan Ringkasan Metrik Statistik (Counter Stats) -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-5 pt-8 border-t border-slate-200/80">
                            <div class="p-3 bg-white/80 rounded-xl border border-slate-200/80 shadow-2xs">
                                <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">10.000+</div>
                                <div class="text-xs font-semibold text-slate-500 mt-0.5">Sepatu Ditangani</div>
                            </div>
                            <div class="p-3 bg-white/80 rounded-xl border border-slate-200/80 shadow-2xs">
                                <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">99.4%</div>
                                <div class="text-xs font-semibold text-slate-500 mt-0.5">Tingkat Kepuasan</div>
                            </div>
                            <div class="p-3 bg-white/80 rounded-xl border border-slate-200/80 shadow-2xs">
                                <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">24–48h</div>
                                <div class="text-xs font-semibold text-slate-500 mt-0.5">Opsi Layanan Kilat</div>
                            </div>
                            <div class="p-3 bg-white/80 rounded-xl border border-slate-200/80 shadow-2xs">
                                <div class="flex items-center gap-1">
                                    <span class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">4.9</span>
                                    <span class="text-amber-500 text-lg">★</span>
                                </div>
                                <div class="text-xs font-semibold text-slate-500 mt-0.5">Rating Google (300+)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Card Display Produk/Layanan & Floating Badges -->
                    <div class="lg:col-span-5 flex justify-center lg:justify-end">
                        <div class="w-full max-w-md bg-white rounded-3xl border border-slate-200 shadow-2xl p-4 sm:p-5 relative">
                            <!-- Image Frame -->
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/3] bg-slate-950">
                                <img src="{{ asset('images/hero-craftsmanship.jpg') }}" 
                                     alt="Restorasi Sepatu Berkualitas SOLECRAFT" 
                                     class="w-full h-full object-cover object-center"
                                     onerror="this.src='{{ asset('images/before-after-clean.jpg') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-black/20 pointer-events-none"></div>
                            </div>

                            <!-- Floating Badge 1: Rating (Top Left) -->
                            <div class="absolute -top-3 -left-3 sm:-left-4 bg-white rounded-2xl p-3 shadow-xl border border-slate-200 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-amber-500 text-white flex items-center justify-center font-black text-sm">
                                    4.9
                                </div>
                                <div>
                                    <div class="flex text-amber-500 text-xs">★★★★★</div>
                                    <div class="text-[11px] font-bold text-slate-800">Review Terverifikasi</div>
                                </div>
                            </div>

                            <!-- Floating Badge 2: Quality & Protection (Bottom Right) -->
                            <div class="absolute -bottom-4 -right-3 sm:-right-4 bg-slate-900 text-white rounded-2xl p-3.5 shadow-xl border border-slate-700 flex items-center gap-3 max-w-[240px]">
                                <div class="w-9 h-9 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div class="leading-tight">
                                    <div class="text-xs font-bold text-white">Antibacterial &amp; Ziplock</div>
                                    <div class="text-[10px] text-slate-400">Sepatu steril siap simpan</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- =========================================================================
             HIGHLIGHT BAR (SOLECRAFT VALUE PROPOSITIONS - IMAGE 3 ICON)
             ========================================================================= --}}
        <section class="py-8 bg-slate-900 border-b border-slate-800 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-0 lg:divide-x lg:divide-slate-800 text-center">
                    <!-- 1. Pembersihan & Parfum -->
                    <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[14px] bg-[#221a11] text-amber-400 border border-amber-500/20 flex items-center justify-center mb-3 shadow-inner">
                            <svg class="w-5 h-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2.5 Q12 12 21.5 12 Q12 12 12 21.5 Q12 12 2.5 12 Q12 12 12 2.5Z"/>
                                <path d="M5.5 2 Q5.5 5.2 8.7 5.2 Q5.5 5.2 5.5 8.4 Q5.5 5.2 2.3 5.2 Q5.5 5.2 5.5 2Z"/>
                                <path d="M18.5 15.7 Q18.5 18.5 21.3 18.5 Q18.5 18.5 18.5 21.3 Q18.5 18.5 15.7 18.5 Q18.5 18.5 15.7Z"/>
                            </svg>
                        </div>
                        <p class="text-xs sm:text-sm font-bold text-slate-100 tracking-tight">Pembersihan &amp; Parfum</p>
                        <p class="text-xs text-slate-400 mt-1 font-normal">Termasuk di seluruh treatment</p>
                    </div>

                    <!-- 2. Kemasan Ziplock Steril -->
                    <div class="flex flex-col items-center justify-center p-2 lg:px-4">
                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[14px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
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
                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[14px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
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
                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-[14px] bg-amber-500/[0.12] text-amber-400 flex items-center justify-center mb-3">
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
        </section>

        {{-- =========================================================================
             3. STEP PROCESS / CARA KERJA
             ========================================================================= --}}
        <section id="cara-kerja" class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        CARA KERJA
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                        3 Langkah Mudah Sepatu Kembali Prima
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mt-3 leading-relaxed">
                        Prosedur standar workshop SOLECRAFT memastikan setiap material diperlakukan secara tepat dan higienis.
                    </p>
                </div>

                <!-- 3 Steps Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                    <!-- Step 1 -->
                    <div class="bg-slate-50/80 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow relative">
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                            <span class="text-3xl font-black text-slate-300">01</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Konsultasi &amp; Pengecekan</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Bawa sepatu ke workshop atau kirim foto lewat WhatsApp. Kami menganalisis jenis bahan, sensitivitas warna, dan keluhan utama.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-slate-50/80 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow relative">
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <span class="text-3xl font-black text-slate-300">02</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Treatment Presisi &amp; Sterilisasi</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pembersihan manual dengan sikat khusus (horsehair/nylon) dan formula pH-neutral, diakhiri sterilisasi UV untuk melenyapkan bakteri dan bau apek.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-slate-50/80 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow relative">
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                            </div>
                            <span class="text-3xl font-black text-slate-300">03</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2">QC, Parfum, &amp; Ziplock</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Pemeriksaan detail akhir, semprotan parfum wangi tahan lama, serta kemasan plastik ziplock higienis yang rapi dan siap dibawa pulang.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================================
             4. INTERACTIVE FILTER / MULTI-STEP RECOMMENDATION WIDGET
             ========================================================================= --}}
        <section id="rekomendasi" class="py-16 sm:py-20 bg-slate-100/70 border-b border-slate-200/80">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-700 bg-amber-100 px-3 py-1 rounded-full border border-amber-200">
                        REKOMENDASI CERDAS
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                        Temukan Treatment Tepat untuk Sepatu Anda
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mt-2.5 leading-relaxed">
                        Pilih jenis sepatu, tingkat kotor, dan keluhan utama di bawah untuk mendapatkan rekomendasi instan.
                    </p>
                </div>

                <!-- Recommendation Card Container -->
                <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-6 sm:p-8 lg:p-10">
                    
                    <!-- Kategori 1: Jenis Sepatu -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-slate-900 text-white text-xs font-bold flex items-center justify-center">1</span>
                            <h3 class="text-base font-bold text-slate-900">Pilih Jenis / Tipe Sepatu</h3>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 sm:gap-3" id="filter-shoe-type">
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Sneakers">
                                <span>Sneakers Casual</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Leather">
                                <span>Leather / Formal</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Boots">
                                <span>Boots / Outdoor</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Canvas">
                                <span>Canvas / Slip-on</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Suede">
                                <span>Suede / Nubuck</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="shoe_type" data-value="Women">
                                <span>Kids / Women Shoes</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                        </div>
                    </div>

                    <!-- Kategori 2: Tingkat Kotor / Kondisi -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-slate-900 text-white text-xs font-bold flex items-center justify-center">2</span>
                            <h3 class="text-base font-bold text-slate-900">Kondisi &amp; Keluhan Utama</h3>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3" id="filter-condition">
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="condition" data-value="ringan">
                                <span>Debu / Pemakaian Harian</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="condition" data-value="lumpur">
                                <span>Lumpur &amp; Noda Membandel</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="condition" data-value="unyellowing">
                                <span>Sol Menguning (Oksidasi)</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="condition" data-value="sol-lepas">
                                <span>Sol Lepas / Butuh Jahit</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                        </div>
                    </div>

                    <!-- Kategori 3: Treatment yang Dibutuhkan -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-slate-900 text-white text-xs font-bold flex items-center justify-center">3</span>
                            <h3 class="text-base font-bold text-slate-900">Ekspektasi Hasil Treatment</h3>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3" id="filter-treatment">
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="treatment" data-value="deep-clean">
                                <span>Bersih &amp; Wangi Segar</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="treatment" data-value="whitening">
                                <span>Sol Kembali Putih Bersih</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="treatment" data-value="repair">
                                <span>Sol Rekat Kuat / Dijahit</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                            <button type="button" class="rec-option-card flex items-center justify-between p-3.5 rounded-xl border border-slate-200 text-slate-700 text-left text-xs sm:text-sm font-semibold transition-all hover:bg-slate-50 hover:border-slate-300" data-group="treatment" data-value="repaint">
                                <span>Warna Pekat / Repaint</span>
                                <span class="check-icon opacity-0 text-amber-600">✓</span>
                            </button>
                        </div>
                    </div>

                    <!-- Action Button: Dapatkan Rekomendasi -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 border-t border-slate-100">
                        <div class="text-xs text-slate-500 text-center sm:text-left">
                            *Pilih minimal satu opsi dari setiap langkah untuk hasil paling akurat.
                        </div>
                        <button type="button" 
                                id="btn-get-recommendation" 
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-xl bg-amber-600 hover:bg-amber-700 active:scale-[0.98] text-white font-bold text-sm shadow-md hover:shadow-lg transition-all">
                            <span id="btn-rec-spinner" class="hidden w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                            <span id="btn-rec-text">Dapatkan Rekomendasi</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dynamic Recommendation Result Container (Hidden by default) -->
                    <div id="recommendation-result-box" class="hidden mt-8 pt-8 border-t border-slate-200">
                        <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-2xl p-6 sm:p-7 text-white shadow-xl relative overflow-hidden">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold border border-amber-500/30">
                                    <span>Rekomendasi Terbaik</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                                    <span id="rec-match-score">98% Match</span>
                                </div>
                                <div class="text-right sm:text-right">
                                    <span class="text-xs text-slate-400 block">Estimasi Biaya</span>
                                    <span id="rec-service-price" class="text-2xl font-black text-amber-400">Rp 45.000</span>
                                </div>
                            </div>

                            <h4 id="rec-service-title" class="text-xl sm:text-2xl font-extrabold text-white mb-2">
                                Deep Clean &amp; Antibacterial Care
                            </h4>
                            <p id="rec-service-desc" class="text-sm text-slate-300 leading-relaxed mb-6 max-w-2xl">
                                Pencucian menyeluruh pada bagian upper, midsole, outsole, insole, dan tali sepatu dengan formula busa pH-neutral. Dilengkapi sterilisasi UV dan semprotan parfum eksklusif.
                            </p>

                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5">
                                <a id="rec-wa-btn" 
                                   href="https://wa.me/{{ $whatsappNumber }}?text=Halo%20SOLECRAFT,%20saya%20tertarik%20dengan%20hasil%20rekomendasi%20layanan."
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-all">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.54 1.771.82 2.787.82 3.18 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.806-5.764-6.006zm0 10.455c-.888 0-1.666-.25-2.338-.688l-.167-.101-1.571.412.42-1.529-.11-.175c-.477-.732-.733-1.464-.733-2.608 0-2.453 1.996-4.449 4.453-4.449 2.455 0 4.451 1.996 4.451 4.451 0 2.455-1.996 4.487-4.405 4.487zm2.443-3.328c-.134-.067-.791-.391-.913-.435-.123-.044-.213-.067-.303.067-.09.134-.347.435-.426.525-.078.09-.157.101-.291.034-.134-.067-.565-.208-1.077-.665-.398-.355-.667-.793-.745-.927-.078-.134-.008-.207.059-.273.06-.06.134-.157.202-.236.067-.078.09-.134.134-.224.045-.09.022-.169-.011-.236-.034-.067-.303-.73-.415-1-.109-.263-.22-.227-.303-.231-.078-.004-.168-.005-.257-.005s-.236.034-.359.169c-.123.134-.471.46-.471 1.122 0 .662.482 1.301.55 1.391.067.09.95 1.45 2.302 2.033.322.139.573.222.769.284.323.103.617.088.85.054.26-.039.791-.323.903-.635.112-.313.112-.581.078-.635-.033-.057-.123-.09-.257-.157z"/>
                                    </svg>
                                    <span>Pesan Layanan Rekomendasi via WA</span>
                                </a>
                                <a href="#services" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white text-sm font-semibold border border-slate-700 transition-all">
                                    <span>Lihat Semua Layanan (23)</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- =========================================================================
             5. SERVICE CATALOG GRID (KATALOG LAYANAN)
             ========================================================================= --}}
        <section id="services" class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        KATALOG LENGKAP
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                        Daftar Layanan Perawatan Sepatu
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mt-2.5 leading-relaxed">
                        Pilihan lengkap dari deep cleaning harian hingga restorasi total sepatu favorit Anda di Bekasi Selatan.
                    </p>
                </div>

                <!-- Horizontal Category Filter Tabs (Scrollable on mobile, no-scrollbar) -->
                <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 no-scrollbar scroll-smooth" id="catalog-category-tabs" role="tablist">
                    <button type="button" class="catalog-tab-btn active shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-900 text-white shadow-2xs transition-all" data-category="all" role="tab" aria-selected="true">
                        Semua ({{ $services->count() }})
                    </button>
                    <button type="button" class="catalog-tab-btn shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all" data-category="cleaning" role="tab" aria-selected="false">
                        Deep Cleaning
                    </button>
                    <button type="button" class="catalog-tab-btn shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all" data-category="repair" role="tab" aria-selected="false">
                        Repair &amp; Sol Reglue
                    </button>
                    <button type="button" class="catalog-tab-btn shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all" data-category="repaint" role="tab" aria-selected="false">
                        Repaint &amp; Restorasi
                    </button>
                    <button type="button" class="catalog-tab-btn shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all" data-category="unyellowing" role="tab" aria-selected="false">
                        Midsole Unyellowing
                    </button>
                    <button type="button" class="catalog-tab-btn shrink-0 px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all" data-category="women" role="tab" aria-selected="false">
                        Kids &amp; Women Shoes
                    </button>
                </div>

                <!-- Skeleton Loader Component (Hidden by default, shown during filtering/simulated loading) -->
                <x-service-skeleton count="6" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 hidden" id="catalog-skeleton" />

                <!-- Service Catalog Cards Grid (1 col mobile, 2 col tablet, 3 col desktop) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="catalog-grid">
                    @forelse($services as $service)
                        @php
                            $slug = strtolower($service->slug ?? '');
                            $name = strtolower($service->name ?? '');
                            $categoryGroup = 'cleaning';
                            if (str_contains($slug, 'repair') || str_contains($slug, 'reglue') || str_contains($slug, 'jahit') || str_contains($name, 'repair') || str_contains($name, 'reglue')) {
                                $categoryGroup = 'repair';
                            } elseif (str_contains($slug, 'repaint') || str_contains($name, 'repaint') || str_contains($name, 'pewarnaan')) {
                                $categoryGroup = 'repaint';
                            } elseif (str_contains($slug, 'unyellowing') || str_contains($slug, 'whitening') || str_contains($name, 'unyellowing')) {
                                $categoryGroup = 'unyellowing';
                            } elseif (str_contains($slug, 'kids') || str_contains($slug, 'women') || str_contains($name, 'kids') || str_contains($name, 'women')) {
                                $categoryGroup = 'women';
                            }

                            $categoryBadge = match($categoryGroup) {
                                'repair' => ['bg' => 'bg-orange-50 text-orange-700 border-orange-200', 'label' => 'Repair & Sol'],
                                'repaint' => ['bg' => 'bg-purple-50 text-purple-700 border-purple-200', 'label' => 'Repaint & Restorasi'],
                                'unyellowing' => ['bg' => 'bg-amber-50 text-amber-700 border-amber-200', 'label' => 'Unyellowing Sol'],
                                'women' => ['bg' => 'bg-pink-50 text-pink-700 border-pink-200', 'label' => 'Kids & Women'],
                                default => ['bg' => 'bg-emerald-50 text-emerald-700 border-emerald-200', 'label' => 'Deep Cleaning']
                            };

                            $cleanPrice = number_format($service->price, 0, ',', '.');
                            $waMessage = urlencode("Halo SOLECRAFT, saya ingin pesan layanan {$service->name}.");
                        @endphp
                        
                        <div class="catalog-card group bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-2xs hover:shadow-lg transition-all duration-200 flex flex-col justify-between"
                             data-category="{{ $categoryGroup }}">
                            
                            <div>
                                <!-- Top Tag & Category -->
                                <div class="flex items-center justify-between gap-2 mb-3.5">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold border {{ $categoryBadge['bg'] }}">
                                        {{ $categoryBadge['label'] }}
                                    </span>
                                    <div class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-500 bg-slate-50 px-2 py-0.5 rounded-md">
                                        <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $service->estimated_days ?? 3 }} Hari</span>
                                    </div>
                                </div>

                                <!-- Treatment Title -->
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 mb-2 line-clamp-2 leading-snug group-hover:text-amber-600 transition-colors">
                                    {{ $service->name }}
                                </h3>

                                <!-- Description -->
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4 line-clamp-3">
                                    {{ $service->description }}
                                </p>

                                <!-- Material Badges (Max 3) -->
                                @if(!empty($service->supported_materials) && is_array($service->supported_materials))
                                    <div class="flex flex-wrap gap-1.5 mb-5">
                                        @foreach(array_slice($service->supported_materials, 0, 3) as $mat)
                                            <span class="text-[10px] font-semibold px-2 py-0.5 rounded bg-slate-100 text-slate-600">
                                                {{ $mat }}
                                            </span>
                                        @endforeach
                                        @if(count($service->supported_materials) > 3)
                                            <span class="text-[10px] font-semibold px-1.5 py-0.5 rounded bg-slate-50 text-slate-400">
                                                +{{ count($service->supported_materials) - 3 }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <!-- Bottom Action: Price & Button -->
                            <div class="pt-4 border-t border-slate-100 mt-auto">
                                <div class="flex items-end justify-between gap-3 mb-3.5">
                                    <div>
                                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Mulai Dari</span>
                                        <span class="text-lg sm:text-xl font-extrabold text-slate-900">
                                            Rp {{ $cleanPrice }}
                                        </span>
                                    </div>
                                </div>
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ $waMessage }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="w-full inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl border border-slate-900 text-slate-900 hover:bg-slate-900 hover:text-white font-bold text-xs sm:text-sm transition-all shadow-2xs active:scale-[0.98]">
                                    <svg class="w-4 h-4 text-emerald-600 group-hover:text-emerald-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.54 1.771.82 2.787.82 3.18 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.806-5.764-6.006zm0 10.455c-.888 0-1.666-.25-2.338-.688l-.167-.101-1.571.412.42-1.529-.11-.175c-.477-.732-.733-1.464-.733-2.608 0-2.453 1.996-4.449 4.453-4.449 2.455 0 4.451 1.996 4.451 4.451 0 2.455-1.996 4.487-4.405 4.487zm2.443-3.328c-.134-.067-.791-.391-.913-.435-.123-.044-.213-.067-.303.067-.09.134-.347.435-.426.525-.078.09-.157.101-.291.034-.134-.067-.565-.208-1.077-.665-.398-.355-.667-.793-.745-.927-.078-.134-.008-.207.059-.273.06-.06.134-.157.202-.236.067-.078.09-.134.134-.224.045-.09.022-.169-.011-.236-.034-.067-.303-.73-.415-1-.109-.263-.22-.227-.303-.231-.078-.004-.168-.005-.257-.005s-.236.034-.359.169c-.123.134-.471.46-.471 1.122 0 .662.482 1.301.55 1.391.067.09.95 1.45 2.302 2.033.322.139.573.222.769.284.323.103.617.088.85.054.26-.039.791-.323.903-.635.112-.313.112-.581.078-.635-.033-.057-.123-.09-.257-.157z"/>
                                    </svg>
                                    <span>Pesan Layanan</span>
                                </a>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-3 text-center py-12 text-slate-500">
                            Layanan sedang diperbarui. Silakan hubungi WhatsApp kami untuk konsultasi.
                        </div>
                    @endforelse
                </div>

                <!-- Empty State (Hidden by default) -->
                <div id="catalog-empty-state" class="hidden text-center py-14 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                    <p class="text-base font-bold text-slate-800">Tidak ada layanan dalam kategori ini</p>
                    <p class="text-xs text-slate-500 mt-1">Silakan pilih kategori lain atau konsultasikan langsung via WhatsApp.</p>
                </div>
            </div>
        </section>

        {{-- =========================================================================
             6. BEFORE & AFTER SHOWCASE (DARK CONTRAST THEME + INTERACTIVE SLIDER)
             ========================================================================= --}}
        <section id="showcase" class="py-16 sm:py-20 bg-slate-950 text-white relative overflow-hidden">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-400 bg-amber-950/60 px-3.5 py-1 rounded-full border border-amber-500/40">
                        SHOWCASE
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight mt-3">
                        Before &amp; After Hasil Treatment
                    </h2>
                    <p class="text-sm sm:text-base text-slate-400 mt-2.5 leading-relaxed">
                        Geser garis slider di bawah untuk melihat perbedaan nyata sebelum dan sesudah perawatan di SOLECRAFT.
                    </p>
                </div>

                <!-- Interactive Split Slider Container -->
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-slate-800 bg-black aspect-[4/3] sm:aspect-[16/10] select-none" id="ba-slider-container">
                    <!-- Layer 1: Clean Image (SESUDAH - Background) -->
                    <img src="{{ asset('images/before-after-clean.jpg') }}" 
                         alt="Sesudah Treatment SOLECRAFT" 
                         class="absolute inset-0 w-full h-full object-cover object-center select-none pointer-events-none">

                    <!-- Layer 2: Dirty Image (SEBELUM - Clipped) -->
                    <div id="ba-clipped-wrap" class="absolute inset-0 w-full h-full overflow-hidden select-none pointer-events-none" style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);">
                        <img src="{{ asset('images/before-after-dirty.jpg') }}" 
                             alt="Sebelum Treatment SOLECRAFT" 
                             class="absolute inset-0 w-full h-full object-cover object-center select-none pointer-events-none">
                    </div>

                    <!-- Handle Line & Tactile Button -->
                    <div id="ba-handle-line" class="absolute inset-y-0 pointer-events-none z-20 flex items-center justify-center -translate-x-1/2" style="left: 50%;">
                        <div class="w-0.5 h-full bg-white shadow-[0_0_12px_rgba(0,0,0,0.9)]"></div>
                        <div class="absolute w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white text-slate-900 shadow-2xl border-2 border-amber-500 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 9l4-4 4 4m0 6l-4 4-4-4" transform="rotate(90 12 12)" />
                            </svg>
                        </div>
                    </div>

                    <!-- Badges Before / After -->
                    <div class="absolute top-4 left-4 z-20 pointer-events-none">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-xl text-[11px] font-extrabold uppercase bg-slate-900/85 text-amber-300 border border-amber-500/40 backdrop-blur-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                            Sebelum (Kotor &amp; Oksidasi)
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 z-20 pointer-events-none">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-xl text-[11px] font-extrabold uppercase bg-slate-900/85 text-emerald-400 border border-emerald-500/40 backdrop-blur-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            Sesudah (Bersih &amp; Terestorasi)
                        </span>
                    </div>

                    <!-- Floating Instruction Hint -->
                    <div class="absolute bottom-4 inset-x-0 flex justify-center z-20 pointer-events-none">
                        <span class="px-4 py-1.5 rounded-full text-xs font-semibold text-white/90 bg-black/70 backdrop-blur-md shadow-md flex items-center gap-2 border border-white/15">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" transform="rotate(90 12 12)"/>
                            </svg>
                            <span>Geser slider kiri &amp; kanan</span>
                        </span>
                    </div>

                    <!-- Accessible Range Input Overlaid for Keyboard/Screenreader + Touch -->
                    <input type="range" 
                           min="0" 
                           max="100" 
                           value="50" 
                           id="ba-range-input" 
                           aria-label="Geser untuk membandingkan kondisi sepatu sebelum dan sesudah perawatan" 
                           class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-30 touch-none">
                </div>

                <!-- Case Study Details Beneath Slider -->
                <div class="mt-6 p-5 sm:p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <div class="inline-flex items-center gap-2 mb-1">
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">STUDI KASUS</span>
                            <span class="text-xs text-slate-400 font-semibold">• Nike Air Jordan 1 High OG</span>
                        </div>
                        <h4 class="text-base font-bold text-white">Midsole Unyellowing &amp; Leather Deep Conditioning</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Penghilangan noda oksidasi menguning pada sol dan hidrasi kulit asli tanpa merusak tekstur.</p>
                    </div>
                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Halo%20SOLECRAFT,%20saya%20ingin%20konsultasi%20treatment%20seperti%20pada%20showcase%20Before%20After." 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="shrink-0 inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-xs transition-colors">
                        <span>Konsultasikan Sepatu Serupa</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- =========================================================================
             7. TESTIMONIAL & SOCIAL PROOF
             ========================================================================= --}}
        <section id="testimoni" class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-14">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        TESTIMONIAL
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                        Dipercaya Ribuan Pecinta Sepatu
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mt-2.5 leading-relaxed">
                        Ulasan nyata dari pelanggan yang mempercayakan sepatu kesayangan mereka kepada kami.
                    </p>
                </div>

                <!-- 3 Columns Testimonial Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Review 1 -->
                    <div class="bg-slate-50/90 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs flex flex-col justify-between">
                        <div>
                            <div class="flex text-amber-500 text-sm mb-3">★★★★★</div>
                            <p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                                "Air Jordan 1 saya solnya menguning parah karena kelamaan disimpan di rak. Setelah di-unyellowing di Solecraft, hasilnya balik seperti baru keluar dari box! Wanginya juga tahan lama."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-full bg-amber-600 text-white font-bold flex items-center justify-center text-sm">
                                DP
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">Dimas Pratama</div>
                                <div class="text-xs text-slate-500">Sneakers Enthusiast • Bekasi Barat</div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-slate-50/90 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs flex flex-col justify-between">
                        <div>
                            <div class="flex text-amber-500 text-sm mb-3">★★★★★</div>
                            <p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                                "Sepatu Docmart kulit saya jamuran waktu musim hujan. Di-treatment Deep Clean + Leather Conditioning, kulitnya jadi lentur kembali dan noda jamurnya hilang tuntas. Super puas!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-full bg-slate-900 text-white font-bold flex items-center justify-center text-sm">
                                SA
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">Sarah Anindita</div>
                                <div class="text-xs text-slate-500">Pekerja Kreatif • Pekayon Jaya</div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-slate-50/90 rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs flex flex-col justify-between">
                        <div>
                            <div class="flex text-amber-500 text-sm mb-3">★★★★★</div>
                            <p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                                "Sol sepatu running saya mangap di bagian depan. Di-reglue di sini rapi banget, lemnya kuat dan fleksibel, dipakai race 10K aman tidak ada tanda-tanda lepas lagi."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-200/80">
                            <div class="w-10 h-10 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-sm">
                                BS
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">Budi Santoso</div>
                                <div class="text-xs text-slate-500">Pelari Marathon • Galaxy Bekasi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================================
             8. ACCORDION FAQ
             ========================================================================= --}}
        <section id="faq" class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
                        FAQ
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mt-2.5 leading-relaxed">
                        Informasi seputar pengerjaan, keamanan bahan, garansi, dan pengantaran sepatu di workshop kami.
                    </p>
                </div>

                <!-- Accordion Items -->
                <div class="space-y-3.5" id="faq-accordion-group">
                    
                    <!-- Item 1 -->
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle-btn w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 hover:text-amber-600 transition-colors" aria-expanded="false">
                            <span class="text-base sm:text-lg pr-4">Berapa lama estimasi pengerjaan sepatu saya?</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-[max-height,padding] duration-300 ease-in-out px-5 sm:px-6">
                            <p class="text-sm text-slate-600 pb-5 leading-relaxed">
                                Standar pengerjaan Deep Cleaning adalah <strong>3–5 hari kerja</strong> agar proses pengeringan suhu ruangan dan sterilisasi berjalan sempurna. Kami juga menyediakan opsi layanan kilat (Express 24–48 jam) untuk kebutuhan mendesak.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle-btn w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 hover:text-amber-600 transition-colors" aria-expanded="false">
                            <span class="text-base sm:text-lg pr-4">Apakah aman untuk bahan sensitif seperti suede atau nubuck?</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-[max-height,padding] duration-300 ease-in-out px-5 sm:px-6">
                            <p class="text-sm text-slate-600 pb-5 leading-relaxed">
                                Sangat aman. Kami menggunakan pembersih khusus formula kering (*dry foam*) dan sikat bulu kuda asli (*premium horsehair brush*) yang lembut agar bulu suede tidak rontok atau mengeras.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle-btn w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 hover:text-amber-600 transition-colors" aria-expanded="false">
                            <span class="text-base sm:text-lg pr-4">Apakah sol karet yang menguning (oksidasi) bisa putih kembali?</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-[max-height,padding] duration-300 ease-in-out px-5 sm:px-6">
                            <p class="text-sm text-slate-600 pb-5 leading-relaxed">
                                Ya. Layanan **Midsole Unyellowing** kami menggunakan formula de-oksidasi aktif dan penyinaran UV terkontrol yang mengangkat lapisan kuning pada sol karet tanpa mengikis struktur sol.
                            </p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle-btn w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 hover:text-amber-600 transition-colors" aria-expanded="false">
                            <span class="text-base sm:text-lg pr-4">Apakah ada garansi untuk perbaikan sol (reglue)?</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-[max-height,padding] duration-300 ease-in-out px-5 sm:px-6">
                            <p class="text-sm text-slate-600 pb-5 leading-relaxed">
                                Ya, kami memberikan **garansi re-glue 14–30 hari** tergantung jenis pengeleman. Jika sol kembali terbuka dalam masa garansi dalam pemakaian normal, kami rekatkan ulang tanpa biaya tambahan.
                            </p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="faq-item bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle-btn w-full flex items-center justify-between p-5 sm:p-6 text-left font-bold text-slate-900 hover:text-amber-600 transition-colors" aria-expanded="false">
                            <span class="text-base sm:text-lg pr-4">Apakah tersedia layanan antar-jemput (pickup &amp; delivery)?</span>
                            <svg class="faq-chevron w-5 h-5 text-slate-400 shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-[max-height,padding] duration-300 ease-in-out px-5 sm:px-6">
                            <p class="text-sm text-slate-600 pb-5 leading-relaxed">
                                Tentu! Untuk area Bekasi Selatan dan sekitarnya, Anda bisa memesan penjemputan via kurir instan (Gosend / GrabExpress) yang dikoordinasikan langsung melalui WhatsApp customer service kami.
                            </p>
                               {{-- =========================================================================
             9. LOCATION / WORKSHOP INFO & MAPS (GAMBAR 2 DISELARASKAN)
             ========================================================================= --}}
        <section id="lokasi" class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200/80">
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
                                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
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
                                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
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
                                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
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

                    <!-- Right: Dark Map Card (Clean & Focused, Seamless Vertical Fill) -->
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
                                onload="document.getElementById('map-skeleton')?.classList.add('hidden')">
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
    </main>

    {{-- =========================================================================
         10. FOOTER (SESUAI GAMBAR 1 OURASTORE)
         ========================================================================= --}}
    <footer class="bg-slate-950 text-slate-400 border-t border-slate-800/80 pt-14 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Footer Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 pb-12 border-b border-white/[0.08]">
                
                <!-- Col 1: Brand Info (5 Cols on Desktop) -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" width="42" height="42" alt="SOLECRAFT" class="w-10 h-10 object-contain rounded-full shadow-md">
                        <div>
                            <span class="text-xl font-black text-white tracking-tight">SOLE<span class="text-amber-500">CRAFT</span></span>
                            <span class="block text-[11px] text-amber-400 font-bold tracking-widest uppercase">SHOE CARE SOLUTIONS</span>
                        </div>
                    </div>
                    <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-md">
                        Spesialis perawatan, deep cleaning presisi, dan restorasi sepatu profesional di Pekayon Jaya, Bekasi Selatan. Pengerjaan higienis dengan formula pH-neutral, sterilisasi sinar UV, dan drying cabinet modern untuk perlindungan maksimal sepatu Anda.
                    </p>
                </div>

                <!-- 3 Navigation Columns (7 Cols on Desktop: Peta Situs, Dukungan, Legalitas) -->
                <div class="lg:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-8 sm:gap-10">
                    <!-- Kolom 1: Peta Situs -->
                    <div>
                        <h4 class="text-xs font-bold text-amber-500/90 uppercase tracking-wider mb-4">Peta Situs</h4>
                        <ul class="space-y-3 text-xs sm:text-sm">
                            <li><a href="#hero" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Beranda</a></li>
                            <li><a href="#cara-kerja" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Cara Kerja</a></li>
                            <li><a href="#rekomendasi" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Rekomendasi</a></li>
                            <li><a href="#services" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Daftar Layanan</a></li>
                            <li><a href="#faq" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Tanya Jawab (FAQ)</a></li>
                        </ul>
                    </div>

                    <!-- Kolom 2: Dukungan -->
                    <div>
                        <h4 class="text-xs font-bold text-amber-500/90 uppercase tracking-wider mb-4">Dukungan</h4>
                        <ul class="space-y-3 text-xs sm:text-sm">
                            <li>
                                <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-flex items-center gap-1.5">
                                    <span>WhatsApp CS</span>
                                </a>
                            </li>
                            <li><a href="#rekomendasi" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Konsultasi Gratis</a></li>
                            <li><a href="#lokasi" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Panduan Drop-off</a></li>
                            <li><a href="#services" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Reparasi &amp; Sol</a></li>
                            <li><a href="#lokasi" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <!-- Kolom 3: Legalitas -->
                    <div class="col-span-2 sm:col-span-1">
                        <h4 class="text-xs font-bold text-amber-500/90 uppercase tracking-wider mb-4">Legalitas</h4>
                        <ul class="space-y-3 text-xs sm:text-sm">
                            <li><a href="#faq" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Kebijakan Layanan</a></li>
                            <li><a href="#faq" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Syarat &amp; Ketentuan</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Back to Top -->
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; 2026 SOLECRAFT. Hak Cipta Dilindungi.</p>
                <button type="button" id="landing-back-to-top" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white border border-slate-800 transition-colors cursor-pointer text-xs font-semibold focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500" aria-label="Kembali ke atas halaman">
                    <span>Kembali ke atas</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m18 15-6-6-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Action Button (Mobile & Desktop) -->
    <aside class="fixed bottom-5 right-5 z-40 safe-bottom">
        <a href="https://wa.me/{{ $whatsappNumber }}?text=Halo%20SOLECRAFT,%20saya%20ingin%20konsultasi%20perawatan%20sepatu." 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Konsultasi Langsung via WhatsApp"
           class="group flex items-center gap-2.5 px-4 py-3 bg-emerald-600 hover:bg-emerald-500 active:scale-95 text-white rounded-full shadow-2xl hover:shadow-emerald-500/40 transition-all duration-200">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-300 animate-ping absolute"></span>
            <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.54 1.771.82 2.787.82 3.18 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.806-5.764-6.006zm0 10.455c-.888 0-1.666-.25-2.338-.688l-.167-.101-1.571.412.42-1.529-.11-.175c-.477-.732-.733-1.464-.733-2.608 0-2.453 1.996-4.449 4.453-4.449 2.455 0 4.451 1.996 4.451 4.451 0 2.455-1.996 4.487-4.405 4.487zm2.443-3.328c-.134-.067-.791-.391-.913-.435-.123-.044-.213-.067-.303.067-.09.134-.347.435-.426.525-.078.09-.157.101-.291.034-.134-.067-.565-.208-1.077-.665-.398-.355-.667-.793-.745-.927-.078-.134-.008-.207.059-.273.06-.06.134-.157.202-.236.067-.078.09-.134.134-.224.045-.09.022-.169-.011-.236-.034-.067-.303-.73-.415-1-.109-.263-.22-.227-.303-.231-.078-.004-.168-.005-.257-.005s-.236.034-.359.169c-.123.134-.471.46-.471 1.122 0 .662.482 1.301.55 1.391.067.09.95 1.45 2.302 2.033.322.139.573.222.769.284.323.103.617.088.85.054.26-.039.791-.323.903-.635.112-.313.112-.581.078-.635-.033-.057-.123-.09-.257-.157z"/>
            </svg>
            <span class="text-xs sm:text-sm font-bold pr-1">Konsultasi CS</span>
        </a>
    </aside>

    {{-- =========================================================================
         MODULAR PURE VANILLA JAVASCRIPT (ZERO EXTERNAL LIBRARIES)
         ========================================================================= --}}
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // -------------------------------------------------------------------------
        // 1. Mobile Menu Hamburger Drawer Toggle
        // -------------------------------------------------------------------------
        const menuToggle = document.getElementById('landing-menu-toggle');
        const mobileDrawer = document.getElementById('landing-mobile-drawer');
        const iconOpen = document.getElementById('landing-icon-open');
        const iconClose = document.getElementById('landing-icon-close');

        if (menuToggle && mobileDrawer) {
            let isMenuOpen = false;

            const toggleMobileMenu = () => {
                isMenuOpen = !isMenuOpen;
                menuToggle.setAttribute('aria-expanded', isMenuOpen ? 'true' : 'false');
                
                if (isMenuOpen) {
                    mobileDrawer.style.maxHeight = mobileDrawer.scrollHeight + 'px';
                    mobileDrawer.classList.remove('opacity-0');
                    mobileDrawer.classList.add('opacity-100');
                    iconOpen.classList.add('hidden');
                    iconClose.classList.remove('hidden');
                } else {
                    mobileDrawer.style.maxHeight = '0';
                    mobileDrawer.classList.remove('opacity-100');
                    mobileDrawer.classList.add('opacity-0');
                    iconOpen.classList.remove('hidden');
                    iconClose.classList.add('hidden');
                }
            };

            menuToggle.addEventListener('click', toggleMobileMenu);

            // Close on nav link click
            document.querySelectorAll('.landing-mobile-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (isMenuOpen) toggleMobileMenu();
                });
            });

            // Close on resize to desktop
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768 && isMenuOpen) {
                    toggleMobileMenu();
                }
            }, { passive: true });
        }

        // -------------------------------------------------------------------------
        // 2. Smooth Scroll for Anchor Links & Back to Top
        // -------------------------------------------------------------------------
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const targetId = anchor.getAttribute('href');
                if (!targetId || targetId === '#') return;
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        const btnBackToTop = document.getElementById('landing-back-to-top');
        if (btnBackToTop) {
            btnBackToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // -------------------------------------------------------------------------
        // 3. Multi-Step Recommendation Widget Logic
        // -------------------------------------------------------------------------
        const state = {
            shoe_type: null,
            condition: null,
            treatment: null
        };

        const optionCards = document.querySelectorAll('.rec-option-card');
        optionCards.forEach(card => {
            card.addEventListener('click', () => {
                const group = card.dataset.group;
                const value = card.dataset.value;

                // De-select siblings in the same group
                document.querySelectorAll(`.rec-option-card[data-group="${group}"]`).forEach(sibling => {
                    sibling.classList.remove('ring-2', 'ring-amber-500', 'border-amber-500', 'bg-amber-50/80', 'text-amber-950');
                    sibling.querySelector('.check-icon')?.classList.add('opacity-0');
                });

                // Select clicked card
                card.classList.add('ring-2', 'ring-amber-500', 'border-amber-500', 'bg-amber-50/80', 'text-amber-950');
                card.querySelector('.check-icon')?.classList.remove('opacity-0');

                state[group] = value;
            });
        });

        const btnGetRec = document.getElementById('btn-get-recommendation');
        const spinner = document.getElementById('btn-rec-spinner');
        const btnText = document.getElementById('btn-rec-text');
        const resultBox = document.getElementById('recommendation-result-box');
        const recTitle = document.getElementById('rec-service-title');
        const recDesc = document.getElementById('rec-service-desc');
        const recPrice = document.getElementById('rec-service-price');
        const recScore = document.getElementById('rec-match-score');
        const recWaBtn = document.getElementById('rec-wa-btn');

        if (btnGetRec && resultBox) {
            btnGetRec.addEventListener('click', () => {
                // Micro-interaction loading state
                spinner?.classList.remove('hidden');
                if (btnText) btnText.textContent = 'Menganalisis Kebutuhan...';
                btnGetRec.disabled = true;

                setTimeout(() => {
                    spinner?.classList.add('hidden');
                    if (btnText) btnText.textContent = 'Rekomendasi Siap!';
                    btnGetRec.disabled = false;

                    // Dynamic smart matching based on user selections
                    let title = 'Deep Clean & Conditioning';
                    let desc = 'Pembersihan menyeluruh khusus sneakers & casual. Membersihkan upper, midsole, laces, ditambah parfum eksklusif dan packing ziplock steril.';
                    let price = 'Rp 45.000';
                    let score = '98% Match';

                    if (state.treatment === 'whitening' || state.condition === 'unyellowing') {
                        title = 'Midsole Unyellowing & Deep Clean';
                        desc = 'Treatment pembersihan intensif dan de-oksidasi kimiawi sol karet yang menguning, mengembalikan warna putih bersih natural sol Anda.';
                        price = 'Rp 65.000';
                        score = '99% Match';
                    } else if (state.treatment === 'repair' || state.condition === 'sol-lepas') {
                        title = 'Sol Reglue Full Press & Deep Clean';
                        desc = 'Perekatan kembali sol sepatu yang menganga menggunakan lem primer & adhesive khusus pabrik berdaya rekat tinggi, lengkap dengan pembersihan.';
                        price = 'Rp 75.000';
                        score = '97% Match';
                    } else if (state.treatment === 'repaint') {
                        title = 'Repaint & Color Restoration';
                        desc = 'Pewarnaan ulang bagian yang pudar atau lecet menggunakan cat fleksibel tahan air khusus material sepatu, warna pekat kembali rata.';
                        price = 'Rp 110.000';
                        score = '96% Match';
                    } else if (state.shoe_type === 'Leather') {
                        title = 'Leather Care & Polish Treatment';
                        desc = 'Perawatan khusus sepatu kulit premium dengan pembersih pH-netral, hidrasi mink oil, dan semir wax pelindung dari keretakan.';
                        price = 'Rp 55.000';
                        score = '98% Match';
                    } else if (state.shoe_type === 'Suede') {
                        title = 'Suede & Nubuck Gentle Clean';
                        desc = 'Pembersihan dry-foam bebas perendaman air dengan sikat bulu kuda asli untuk menjaga kelembutan serat suede tanpa merusak tekstur.';
                        price = 'Rp 50.000';
                        score = '97% Match';
                    }

                    if (recTitle) recTitle.textContent = title;
                    if (recDesc) recDesc.textContent = desc;
                    if (recPrice) recPrice.textContent = price;
                    if (recScore) recScore.textContent = score;

                    const waNumber = '{{ $whatsappNumber }}';
                    const waText = encodeURIComponent(`Halo SOLECRAFT, saya ingin pesan hasil rekomendasi: ${title} (${price}).`);
                    if (recWaBtn) recWaBtn.href = `https://wa.me/${waNumber}?text=${waText}`;

                    resultBox.classList.remove('hidden');
                    resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 400);
            });
        }

        // -------------------------------------------------------------------------
        // 4. Service Catalog Category Filter Tabs & Skeleton Simulation
        // -------------------------------------------------------------------------
        const catalogTabs = document.querySelectorAll('.catalog-tab-btn');
        const catalogCards = document.querySelectorAll('.catalog-card');
        const emptyState = document.getElementById('catalog-empty-state');
        const catalogSkeleton = document.getElementById('catalog-skeleton');
        const catalogGrid = document.getElementById('catalog-grid');

        catalogTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const category = tab.dataset.category;

                // Update active tab styles
                catalogTabs.forEach(t => {
                    t.classList.remove('bg-slate-900', 'text-white', 'shadow-2xs');
                    t.classList.add('bg-slate-100', 'text-slate-700');
                    t.setAttribute('aria-selected', 'false');
                });
                tab.classList.remove('bg-slate-100', 'text-slate-700');
                tab.classList.add('bg-slate-900', 'text-white', 'shadow-2xs');
                tab.setAttribute('aria-selected', 'true');

                // Filter cards
                let visibleCount = 0;
                catalogCards.forEach(card => {
                    const cardCat = card.dataset.category;
                    if (category === 'all' || cardCat === category) {
                        card.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        card.classList.add('hidden');
                    }
                });

                if (emptyState) {
                    if (visibleCount === 0) {
                        emptyState.classList.remove('hidden');
                    } else {
                        emptyState.classList.add('hidden');
                    }
                }
            });
        });

        // -------------------------------------------------------------------------
        // 5. Before & After Showcase Split Comparison Slider
        // -------------------------------------------------------------------------
        const baContainer = document.getElementById('ba-slider-container');
        const baClipped = document.getElementById('ba-clipped-wrap');
        const baHandle = document.getElementById('ba-handle-line');
        const baRange = document.getElementById('ba-range-input');

        if (baContainer && baClipped && baHandle) {
            const updateSlider = (percentage) => {
                const clamped = Math.max(0, Math.min(100, percentage));
                baClipped.style.clipPath = `polygon(0 0, ${clamped}% 0, ${clamped}% 100%, 0 100%)`;
                baHandle.style.left = `${clamped}%`;
                if (baRange) baRange.value = clamped;
            };

            // Range input listener (Keyboard & screenreader & standard range touch)
            if (baRange) {
                baRange.addEventListener('input', (e) => {
                    updateSlider(e.target.value);
                });
            }

            // Pointer / Mouse / Touch Dragging on Container
            let isDragging = false;

            const handlePointerMove = (e) => {
                if (!isDragging && e.type !== 'input') return;
                const rect = baContainer.getBoundingClientRect();
                const clientX = e.clientX || (e.touches && e.touches[0] ? e.touches[0].clientX : 0);
                const offsetX = clientX - rect.left;
                const percentage = (offsetX / rect.width) * 100;
                updateSlider(percentage);
            };

            baContainer.addEventListener('pointerdown', (e) => {
                isDragging = true;
                handlePointerMove(e);
            });

            window.addEventListener('pointermove', handlePointerMove);
            window.addEventListener('pointerup', () => { isDragging = false; });
            window.addEventListener('pointercancel', () => { isDragging = false; });
        }

        // -------------------------------------------------------------------------
        // 6. Native Accordion FAQ (Smooth Height Animation)
        // -------------------------------------------------------------------------
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const btn = item.querySelector('.faq-toggle-btn');
            const content = item.querySelector('.faq-content');
            const chevron = item.querySelector('.faq-chevron');

            if (btn && content) {
                btn.addEventListener('click', () => {
                    const isOpen = btn.getAttribute('aria-expanded') === 'true';

                    // Close all others
                    faqItems.forEach(otherItem => {
                        const otherBtn = otherItem.querySelector('.faq-toggle-btn');
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherChevron = otherItem.querySelector('.faq-chevron');
                        if (otherBtn && otherContent) {
                            otherBtn.setAttribute('aria-expanded', 'false');
                            otherContent.style.maxHeight = '0';
                            otherChevron?.classList.remove('rotate-180');
                        }
                    });

                    // Toggle current item
                    if (!isOpen) {
                        btn.setAttribute('aria-expanded', 'true');
                        content.style.maxHeight = content.scrollHeight + 'px';
                        chevron?.classList.add('rotate-180');
                    } else {
                        btn.setAttribute('aria-expanded', 'false');
                        content.style.maxHeight = '0';
                        chevron?.classList.remove('rotate-180');
                    }
                });
            }
        });

    });
    </script>
</body>
</html>
