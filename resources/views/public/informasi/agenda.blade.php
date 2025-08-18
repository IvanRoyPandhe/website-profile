@extends('layouts.app')

@section('title', 'Agenda - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Agenda</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                AGENDA KEGIATAN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Agenda <br>
                <span class="text-yellow-400">Kegiatan</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Jadwal kegiatan dan acara Program Studi Ilmu Gizi
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
        @if($agenda->count() > 0)
            <div class="space-y-8 mb-16">
                @foreach($agenda as $item)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-orange-500 overflow-hidden">
                        <div class="p-8">
                            <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                                <div class="flex items-center mb-4 md:mb-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mr-6">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900">{{ $item->title }}</h3>
                                        @if($item->category)
                                            <span class="inline-flex px-3 py-1 text-xs font-bold rounded-full bg-orange-100 text-orange-800 border border-orange-200 mt-2">
                                                {{ ucfirst($item->category) }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="bg-orange-100 text-orange-800 px-4 py-2 rounded-xl font-bold">
                                        {{ $item->start_date->format('d M Y') }}
                                        @if($item->end_date && $item->end_date->format('Y-m-d') !== $item->start_date->format('Y-m-d'))
                                            - {{ $item->end_date->format('d M Y') }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($item->description)
                                <p class="text-gray-700 mb-6 leading-relaxed">{{ $item->description }}</p>
                            @endif
                            <div class="grid md:grid-cols-2 gap-4 text-gray-600">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $item->start_date->format('H:i') }} WIB
                                    @if($item->end_date && $item->end_date->format('Y-m-d') === $item->start_date->format('Y-m-d'))
                                        - {{ $item->end_date->format('H:i') }} WIB
                                    @endif
                                </div>
                                @if($item->location)
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        {{ $item->location }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Call to Action -->
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 lg:p-12 shadow-xl text-center">
                <h3 class="text-3xl lg:text-4xl font-black text-white mb-4">Ingin Update Agenda Terbaru?</h3>
                <p class="text-orange-100 text-lg font-medium mb-8">Ikuti media sosial kami atau hubungi bagian kemahasiswaan untuk informasi agenda terkini</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-orange-600 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors shadow-md">
                        Follow Instagram
                    </a>
                    <a href="{{ route('kontak') }}" class="border-2 border-white text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-orange-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Agenda Sedang Disiapkan</h3>
                    <p class="text-gray-600 text-lg">Agenda kegiatan akan segera tersedia.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection