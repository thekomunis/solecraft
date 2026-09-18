@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan | SOLECRAFT')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan atau telah dipindahkan.')

@section('content')
<div class="min-h-[65vh] flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8 text-center">
    <div class="max-w-md w-full">
        <div class="w-20 h-20 rounded-3xl bg-amber-500/10 border border-amber-500/20 text-amber-600 flex items-center justify-center mx-auto mb-6 shadow-inner">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <span class="text-xs font-black tracking-widest text-amber-600 uppercase">Error 404</span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 mt-2 tracking-tight">Halaman Tidak Ditemukan</h1>
        <p class="text-sm text-slate-500 mt-3 leading-relaxed">
            Halaman yang Anda tuju mungkin sudah dipindahkan, dihapus, atau tautan yang Anda masukkan salah.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="{{ route('home') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-slate-900 text-white font-bold text-sm hover:bg-slate-800 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Kembali ke Beranda</span>
            </a>
            <a href="{{ route('home') }}#diagnostik" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-amber-50 text-amber-800 border border-amber-200 font-bold text-sm hover:bg-amber-100 transition-colors">
                <span>Mulai Diagnosa Sepatu</span>
            </a>
        </div>
    </div>
</div>
@endsection
