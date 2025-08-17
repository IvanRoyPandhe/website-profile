@extends('layouts.app')

@section('title', 'Biaya Pendidikan - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Hero Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-blue-800 via-blue-700 to-blue-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #fbbf24 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-blue-200">
                <a href="{{ route('home') }}" class="hover:text-yellow-300 transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-yellow-300 font-medium">Biaya Pendidikan</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"/>
                </svg>
                BIAYA PENDIDIKAN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Biaya <br>
                <span class="text-yellow-400">Pendidikan</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Informasi lengkap dan transparan mengenai biaya pendidikan Program Studi Ilmu Gizi
            </p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: linear-gradient(45deg, #1e40af 25%, transparent 25%), linear-gradient(-45deg, #1e40af 25%, transparent 25%); background-size: 60px 60px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        @if($biayaPendidikan->count() > 0)
            <div class="space-y-8">
                @foreach($biayaPendidikan as $biaya)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-yellow-500 overflow-hidden">
                    @if($biaya->title)
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex items-center justify-center mb-2">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"/>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 break-words">{{ $biaya->title }}</h2>
                        </div>
                        @if($biaya->description)
                        <p class="text-gray-600 text-center break-words">{{ $biaya->description }}</p>
                        @endif
                    </div>
                    @endif
                    
                    <div class="p-6">
                        <div class="bg-gray-50 rounded-xl p-4">
                            <img src="{{ asset('storage/' . $biaya->image) }}" alt="{{ $biaya->title }}" class="w-full h-auto rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Information Section -->
            <div class="mt-16">
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl p-8 lg:p-12 shadow-xl">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Informasi Pembayaran</h2>
                        <p class="text-yellow-100 text-lg font-medium">Ketentuan dan cara pembayaran biaya pendidikan</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Transfer Bank</h3>
                            <p class="text-yellow-100 text-sm">Pembayaran melalui transfer bank</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Cicilan</h3>
                            <p class="text-yellow-100 text-sm">Tersedia sistem pembayaran cicilan</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Jadwal</h3>
                            <p class="text-yellow-100 text-sm">Pembayaran sesuai jadwal akademik</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Bantuan</h3>
                            <p class="text-yellow-100 text-sm">Konsultasi biaya pendidikan</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-yellow-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Belum Ada Data</h3>
                    <p class="text-gray-600 text-lg">Informasi biaya pendidikan akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection