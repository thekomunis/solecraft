@extends('layouts.app')

@section('title', '500 - Terjadi Kesalahan Server | SOLECRAFT')
@section('meta_description', 'Terjadi gangguan sementara pada sistem. Silakan coba beberapa saat lagi.')

@section('content')
<div class="min-h-[65vh] flex items-center justify-center py-16 px-4 sm:px-6 lg:px-8 text-center">
    <div class="max-w-md w-full">
        <div class="w-20 h-20 rounded-3xl bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center mx-auto mb-6 shadow-inner">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <span class="text-xs font-black tracking-widest text-rose-600 uppercase">Error 500</span>
        <h1 class="text-3xl sm:text-4xl font-black text-slate-900 mt-2 tracking-tight">Gangguan Server</h1>
        <p class="text-sm text-slate-500 mt-3 leading-relaxed">
            Sistem kami sedang mengalami kendala teknis sementara. Tim kami sedang menanganinya. Silakan muat ulang halaman atau hubungi customer service kami.
        </p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="{{ route('home') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-slate-900 text-white font-bold text-sm hover:bg-slate-800 transition-colors shadow-sm">
                <span>Muat Ulang Beranda</span>
            </a>
            <a href="https://wa.me/{{ config('app.whatsapp_number', env('WHATSAPP_NUMBER', '6285810993812')) }}" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-colors shadow-sm">
                <span>Hubungi WhatsApp CS</span>
            </a>
        </div>
    </div>
</div>
@endsection
