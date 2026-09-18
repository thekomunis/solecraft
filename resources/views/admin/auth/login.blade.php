@extends('layouts.app')

@section('title', 'Admin Login - SOLECRAFT')

@section('content')
<div class="min-h-[75vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <!-- Brand / Header -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-block group mb-3">
                <img src="{{ asset('images/logo.png') }}" alt="SOLECRAFT" class="w-16 h-16 object-contain rounded-full mx-auto shadow-md border border-slate-200/80 group-hover:scale-105 transition-transform duration-200">
            </a>
            <h1 class="text-2xl font-black text-slate-900 tracking-tight">SOLECRAFT Admin</h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Masuk untuk mengelola katalog layanan &amp; sistem rekomendasi</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white p-7 sm:p-8 rounded-3xl border border-slate-200/90 shadow-xl shadow-slate-200/40">
            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-5" autocomplete="on">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Alamat Email
                    </label>
                    <div class="relative">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-amber-500/25 focus:border-amber-600 text-sm placeholder-slate-400 transition-colors @error('email') border-rose-500 focus:ring-rose-500/20 focus:border-rose-500 @enderror"
                            placeholder="admin@domain.com"
                        >
                    </div>
                    @error('email')
                        <p class="text-xs text-rose-600 mt-1.5 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="w-full pl-4 pr-11 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-amber-500/25 focus:border-amber-600 text-sm placeholder-slate-400 transition-colors @error('password') border-rose-500 focus:ring-rose-500/20 focus:border-rose-500 @enderror"
                            placeholder="Masukkan kata sandi..."
                        >
                        <!-- Show / Hide Password Toggle Button -->
                        <button
                            type="button"
                            id="togglePasswordBtn"
                            aria-label="Tampilkan atau sembunyikan kata sandi"
                            class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-700 focus:outline-none transition-colors"
                        >
                            <!-- Eye icon (shown by default) -->
                            <svg id="eyeIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <!-- Eye-off icon (hidden by default) -->
                            <svg id="eyeOffIcon" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-xs text-rose-600 mt-1.5 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ $message }}</span>
                        </p>
                    @enderror
                </div>

                <!-- Remember Me & Back to Home -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 text-slate-600 cursor-pointer select-none">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-amber-600 border-slate-300 focus:ring-amber-500">
                        <span>Ingat saya</span>
                    </label>
                    <a href="{{ route('home') }}" class="text-slate-500 hover:text-slate-900 font-medium transition-colors flex items-center gap-1">
                        &larr; Kembali ke Beranda
                    </a>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full py-3 px-4 rounded-xl text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 active:scale-[0.99] shadow-sm hover:shadow-md transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500"
                >
                    Masuk ke Admin
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeOffIcon = document.getElementById('eyeOffIcon');

        if (toggleBtn && passwordInput) {
            toggleBtn.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                eyeIcon.classList.toggle('hidden', isPassword);
                eyeOffIcon.classList.toggle('hidden', !isPassword);
            });
        }
    });
</script>
@endpush
