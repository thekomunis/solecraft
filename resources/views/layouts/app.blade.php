<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SOLECRAFT — Cuci & Perawatan Sepatu di Bekasi Selatan')</title>
    <meta name="description" content="@yield('meta_description', 'Jasa cuci, perawatan, dan reparasi sepatu di Bekasi Selatan. Formula pH-neutral, parfum, dan packing ziplock. Cek tarif & pesan via WhatsApp.')">
    <meta name="keywords" content="cuci sepatu bekasi, perawatan sepatu bekasi selatan, reparasi sepatu, unyellowing sol, repaint sepatu, shoe care bekasi, solecraft">
    <meta name="author" content="SOLECRAFT">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0f172a">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    @php
        $defaultOgTitle = 'SOLECRAFT — Cuci & Perawatan Sepatu di Bekasi Selatan';
        $defaultOgDesc = 'Jasa cuci, perawatan, dan reparasi sepatu di Bekasi Selatan. Formula pH-neutral, parfum, dan packing ziplock. Cek tarif & pesan via WhatsApp.';
        $metaOgTitle = trim($__env->yieldContent('og_title')) ?: (trim($__env->yieldContent('title')) ?: $defaultOgTitle);
        $metaOgDesc = trim($__env->yieldContent('og_description')) ?: (trim($__env->yieldContent('meta_description')) ?: $defaultOgDesc);
        $metaOgImage = trim($__env->yieldContent('og_image')) ?: asset('images/og-image.jpg');
    @endphp

    <!-- Primary Open Graph Meta Tags -->
    <meta property="og:site_name" content="SOLECRAFT">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $metaOgTitle }}">
    <meta property="og:description" content="{{ $metaOgDesc }}">
    <meta property="og:image" content="{{ $metaOgImage }}">
    <meta property="og:image:secure_url" content="{{ $metaOgImage }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $metaOgTitle }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $metaOgTitle }}">
    <meta name="twitter:description" content="{{ $metaOgDesc }}">
    <meta name="twitter:image" content="{{ $metaOgImage }}">
    <meta name="twitter:image:alt" content="{{ $metaOgTitle }}">

    <!-- Google Fonts Preconnect & Swap: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Critical CSS for Instant Preloader (Navy Overlay + Amber Scale Bar) -->
    <style id="critical-preloader-css">
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 99999;
            background-color: #0b1329;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity 250ms ease-out, visibility 250ms ease-out;
        }
        #preloader.preloader-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        .preloader-bar-wrap {
            width: 140px;
            height: 3px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 9999px;
            overflow: hidden;
            margin-top: 16px;
        }
        .preloader-bar {
            width: 100%;
            height: 100%;
            background: #f59e0b;
            transform-origin: left;
            animation: preloader-scale 1.2s cubic-bezier(0.65, 0, 0.35, 1) infinite;
        }
        @keyframes preloader-scale {
            0% { transform: scaleX(0); }
            50% { transform: scaleX(0.7); }
            100% { transform: scaleX(1); }
        }
        @media (prefers-reduced-motion: reduce) {
            .preloader-bar {
                animation: none;
                transform: scaleX(1);
            }
        }
    </style>
    <noscript>
        <style>
            #preloader { display: none !important; }
        </style>
    </noscript>

    <!-- JSON-LD LocalBusiness Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "SOLECRAFT",
        "image": "{{ asset('images/og-image.jpg') }}",
        "url": "{{ url('/') }}",
        "telephone": "+6285810993812",
        "priceRange": "Rp 20.000 - Rp 400.000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Irigasi Gang Penganten No.67, RT.001a/RW.01",
            "addressLocality": "Bekasi Selatan",
            "addressRegion": "Jawa Barat",
            "postalCode": "17148",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -6.2641,
            "longitude": 106.9882
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "09:00",
                "closes": "21:00"
            }
        ],
        "areaServed": [
            "Bekasi Selatan",
            "Kota Bekasi",
            "Pekayon Jaya",
            "Jabodetabek"
        ]
        @if(isset($services) && $services->count() > 0)
        ,
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Layanan Cuci & Restorasi Sepatu SOLECRAFT",
            "itemListElement": [
                @foreach($services as $index => $s)
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "{{ addslashes($s->name) }}",
                        "description": "{{ addslashes($s->description) }}"
                    },
                    "price": "{{ (int) $s->price }}",
                    "priceCurrency": "IDR"
                }{{ $loop->last ? '' : ',' }}
                @endforeach
            ]
        }
        @endif
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col antialiased selection:bg-amber-600 selection:text-white">

    <!-- Preloader Overlay (GLOBAL A) -->
    <div id="preloader" role="status" aria-label="Memuat SOLECRAFT">
        <span class="sr-only">Memuat...</span>
        <img src="{{ asset('images/logo.png') }}" width="48" height="48" alt="SOLECRAFT" class="w-12 h-12 object-contain rounded-full shadow-lg">
        <div class="preloader-bar-wrap" aria-hidden="true">
            <div class="preloader-bar"></div>
        </div>
    </div>

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="SOLECRAFT Logo" class="w-10 h-10 object-contain rounded-full shadow-xs group-hover:scale-105 transition-transform">
                    <div>
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-900 leading-none">SOLE<span class="text-amber-600">CRAFT</span></span>
                        <span class="hidden sm:block text-[11px] font-bold text-slate-500 tracking-wider uppercase mt-0.5">Shoe Care Solutions</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600" id="desktop-nav">
                    <a href="{{ route('home') }}" class="nav-section-link relative hover:text-slate-950 transition-colors pb-1" data-section="hero">Beranda</a>
                    <a href="#cara-kerja" class="nav-section-link relative hover:text-slate-950 transition-colors pb-1" data-section="cara-kerja">Cara Kerja</a>
                    <a href="#diagnostik" class="nav-section-link relative hover:text-slate-950 transition-colors pb-1" data-section="diagnostik">Diagnosa</a>
                    <a href="#layanan" class="nav-section-link relative hover:text-slate-950 transition-colors pb-1" data-section="layanan">Daftar Layanan</a>
                    <a href="#faq" class="nav-section-link relative hover:text-slate-950 transition-colors pb-1" data-section="faq">FAQ</a>
                </nav>

                <!-- Mobile Hamburger Toggle -->
                <button id="mobile-menu-toggle" type="button" class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500" aria-expanded="false" aria-controls="mobile-menu-drawer" aria-label="Toggle navigation menu">
                    <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Action Button: Direct Booking CTA -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <a href="#diagnostik" class="inline-flex items-center gap-1.5 sm:gap-2 px-4 sm:px-5 py-2 sm:py-2.5 text-xs sm:text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 active:scale-[0.98] rounded-xl shadow-sm hover:shadow-md transition-all">
                        <span>Booking Sekarang</span>
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobile-menu-drawer" class="md:hidden overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
            <nav class="px-4 pb-4 pt-2 border-t border-slate-100 bg-white space-y-1">
                <a href="{{ route('home') }}" class="mobile-nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-amber-50/70 hover:text-amber-800 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    Beranda
                </a>
                <a href="#cara-kerja" class="mobile-nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-amber-50/70 hover:text-amber-800 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    Cara Kerja
                </a>
                <a href="#diagnostik" class="mobile-nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-amber-50/70 hover:text-amber-800 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                    Diagnosa Sepatu
                </a>
                <a href="#layanan" class="mobile-nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-amber-50/70 hover:text-amber-800 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                    Daftar Layanan
                </a>
                <a href="#faq" class="mobile-nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold text-slate-700 hover:bg-amber-50/70 hover:text-amber-800 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    FAQ
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer (Desain Baru Mengikuti Referensi Gambar 1 Ourastore) -->
    <footer class="bg-slate-950 text-slate-400 border-t border-slate-800/80 text-sm mt-16 sm:mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 sm:pt-16 pb-8">
            <!-- Main Footer Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 pb-12 border-b border-white/[0.08]">
                <!-- Brand Info (5 Cols on Desktop) -->
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
                            <li><a href="{{ route('home') }}" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Beranda</a></li>
                            <li><a href="#diagnostik" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Diagnosa Sepatu</a></li>
                            <li><a href="#cara-kerja" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Cara Kerja</a></li>
                            <li><a href="#layanan" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Daftar Layanan</a></li>
                            <li><a href="#faq" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Tanya Jawab (FAQ)</a></li>
                        </ul>
                    </div>

                    <!-- Kolom 2: Dukungan -->
                    <div>
                        <h4 class="text-xs font-bold text-amber-500/90 uppercase tracking-wider mb-4">Dukungan</h4>
                        <ul class="space-y-3 text-xs sm:text-sm">
                            <li>
                                <a href="https://wa.me/{{ config('app.whatsapp_number', env('WHATSAPP_NUMBER', '6285810993812')) }}" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-flex items-center gap-1.5">
                                    <span>WhatsApp CS</span>
                                </a>
                            </li>
                            <li><a href="#diagnostik" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Konsultasi Gratis</a></li>
                            <li><a href="#workshop" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Panduan Drop-off</a></li>
                            <li>
                                <a href="#layanan" onclick="if(window.openCatalogWithCategory){ window.openCatalogWithCategory('repair'); return false; }" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">
                                    Reparasi &amp; Sol
                                </a>
                            </li>
                            <li><a href="#workshop" class="text-slate-300 hover:text-white hover:underline underline-offset-4 decoration-1 transition-colors inline-block">Hubungi Kami</a></li>
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

            <!-- Bottom Bar: Hak Cipta 2026 & Kembali ke atas -->
            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 pb-[calc(1rem+env(safe-area-inset-bottom))]">
                <p>&copy; 2026 SOLECRAFT. Hak cipta dilindungi.</p>
                <button type="button" id="btn-back-to-top" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white border border-slate-800 transition-colors cursor-pointer text-xs font-semibold focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500" aria-label="Kembali ke atas halaman">
                    <span>Kembali ke atas</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m18 15-6-6-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Quick Chat CTA -->
    <aside aria-label="Konsultasi Cepat WhatsApp" class="fixed bottom-5 right-5 sm:bottom-6 sm:right-6 z-40">
        <a href="https://wa.me/{{ config('app.whatsapp_number', env('WHATSAPP_NUMBER', '6285810993812')) }}?text={{ urlencode('Halo Admin SOLECRAFT, saya ingin konsultasi cepat tentang perawatan sepatu saya.') }}"
           target="_blank"
           rel="noopener noreferrer"
           class="group relative flex items-center gap-3 bg-emerald-600 hover:bg-emerald-700 active:scale-[0.98] text-white px-4 sm:px-5 py-3 rounded-full shadow-lg shadow-emerald-950/25 hover:shadow-xl hover:shadow-emerald-600/35 transition-all duration-200">
            <!-- Subtle Ping Ring -->
            <span class="absolute -inset-0.5 rounded-full bg-emerald-500/40 animate-ping pointer-events-none opacity-75"></span>
            
            <!-- WhatsApp SVG Icon -->
            <svg class="w-6 h-6 fill-current relative z-10 flex-shrink-0" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
            </svg>
            <div class="relative z-10 flex flex-col items-start leading-tight">
                <span class="text-xs sm:text-sm font-extrabold tracking-tight flex items-center gap-1.5">
                    <span>Konsultasi CS</span>
                    <span class="w-2 h-2 rounded-full bg-emerald-300 animate-pulse" aria-hidden="true"></span>
                </span>
                <span class="text-[10px] text-emerald-100 font-medium hidden sm:inline-block">Konsultasi Gratis</span>
            </div>
        </a>
    </aside>

    <!-- Preloader Lifecycle Script (GLOBAL A) -->
    <script>
    (function() {
        const startTime = performance.now();
        const preloader = document.getElementById('preloader');
        if (!preloader) return;

        let dismissed = false;
        function dismissPreloader() {
            if (dismissed) return;
            dismissed = true;
            const elapsed = performance.now() - startTime;
            const remaining = Math.max(0, 400 - elapsed);

            setTimeout(() => {
                preloader.classList.add('preloader-hidden');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 250);
            }, remaining);
        }

        // Failsafe 2 seconds
        const failsafeTimer = setTimeout(dismissPreloader, 2000);

        window.addEventListener('load', () => {
            clearTimeout(failsafeTimer);
            dismissPreloader();
        });
    })();
    </script>

    @stack('scripts')

    <!-- Navigation Drawer, Smooth Scroll Spy, Back-to-top & Reveal -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Back to top button
        const btnBackToTop = document.getElementById('btn-back-to-top');
        if (btnBackToTop) {
            btnBackToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Mobile hamburger drawer toggle
        const toggle = document.getElementById('mobile-menu-toggle');
        const drawer = document.getElementById('mobile-menu-drawer');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (toggle && drawer) {
            let isOpen = false;

            function openDrawer() {
                isOpen = true;
                drawer.style.maxHeight = drawer.scrollHeight + 'px';
                toggle.setAttribute('aria-expanded', 'true');
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }

            function closeDrawer() {
                isOpen = false;
                drawer.style.maxHeight = '0';
                toggle.setAttribute('aria-expanded', 'false');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }

            toggle.addEventListener('click', () => {
                isOpen ? closeDrawer() : openDrawer();
            });

            // Close drawer when a nav link is clicked
            drawer.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    closeDrawer();
                });
            });

            // Close on resize to desktop
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768 && isOpen) closeDrawer();
            }, { passive: true });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', (e) => {
                const hash = link.getAttribute('href');
                if (!hash || hash === '#' || hash === '#layanan') return;
                const target = document.querySelector(hash);
                if (!target) return;
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Scroll Spy: Highlight active nav section based on scroll position
        const navLinks = document.querySelectorAll('.nav-section-link');
        const sectionIds = ['cara-kerja', 'diagnostik', 'layanan', 'faq'];
        const sections = sectionIds.map(id => document.getElementById(id)).filter(Boolean);

        if (sections.length > 0 && navLinks.length > 0) {
            const observerOpts = { rootMargin: '-20% 0px -60% 0px', threshold: 0 };
            let activeSection = '';

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        activeSection = entry.target.id;
                        navLinks.forEach(link => {
                            if (link.dataset.section === activeSection) {
                                link.classList.add('nav-link-active');
                            } else {
                                link.classList.remove('nav-link-active');
                            }
                        });
                    }
                });
            }, observerOpts);

            sections.forEach(sec => observer.observe(sec));
        }

        // Scroll reveal on scroll
        const revealElements = document.querySelectorAll('.reveal-on-scroll');
        if (revealElements.length > 0 && 'IntersectionObserver' in window) {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

            revealElements.forEach(el => revealObserver.observe(el));
        }
    });
    </script>
</body>
</html>
