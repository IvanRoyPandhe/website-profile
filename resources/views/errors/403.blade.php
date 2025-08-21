@extends('layouts.app')

@section('title', 'Akses Ditolak - 403')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-orange-800 via-orange-700 to-orange-900 flex items-center justify-center px-4">
    <div class="max-w-2xl mx-auto text-center">
        <div class="mb-8">
            <h1 class="text-9xl font-black text-yellow-400 mb-4">403</h1>
            <h2 class="text-3xl font-bold text-white mb-4">Akses Ditolak</h2>
            <p class="text-orange-200 text-lg mb-8">Anda tidak memiliki izin untuk mengakses halaman ini.</p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-orange-900 rounded-full font-bold hover:bg-yellow-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection