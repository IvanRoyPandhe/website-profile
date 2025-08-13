@extends('layouts.app')

@section('title', 'Agenda - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                    Agenda Kegiatan
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Jadwal kegiatan dan acara Program Studi Ilmu Gizi</p>
        </div>

        <!-- Agenda Items -->
        @if($agenda->count() > 0)
            <div class="space-y-8">
                @foreach($agenda as $item)
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                            <div class="flex items-center mb-4 md:mb-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-6">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0v-4m4-4h8m-4-4v8m-4 4h8"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900">{{ $item->title }}</h3>
                                    @if($item->category)
                                        <p class="text-purple-600 font-semibold capitalize">{{ $item->category }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="bg-purple-100 text-purple-800 px-4 py-2 rounded-xl font-bold">
                                    {{ $item->start_date->format('d M Y') }}
                                    @if($item->end_date && $item->end_date->format('Y-m-d') !== $item->start_date->format('Y-m-d'))
                                        - {{ $item->end_date->format('d M Y') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if($item->description)
                            <p class="text-gray-700 mb-4">{{ $item->description }}</p>
                        @endif
                        <div class="grid md:grid-cols-2 gap-4 text-gray-600">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $item->start_date->format('H:i') }} WIB
                                @if($item->end_date && $item->end_date->format('Y-m-d') === $item->start_date->format('Y-m-d'))
                                    - {{ $item->end_date->format('H:i') }} WIB
                                @endif
                            </div>
                            @if($item->location)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $item->location }}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="text-gray-400 mb-4">
                    <svg class="mx-auto h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0v-4m4-4h8m-4-4v8m-4 4h8"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Agenda</h3>
                <p class="text-gray-500">Agenda kegiatan akan segera tersedia.</p>
            </div>
        @endif



        <!-- Call to Action -->
        <div class="mt-16 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl p-8 text-center">
            <h3 class="text-2xl font-bold mb-4">Ingin Mendapat Update Agenda Terbaru?</h3>
            <p class="text-purple-100 mb-6">Ikuti media sosial kami atau hubungi bagian kemahasiswaan untuk informasi agenda terkini</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-purple-600 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors">
                    Follow Instagram
                </a>
                <a href="{{ route('kontak') }}" class="border-2 border-white text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-purple-600 transition-colors">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection