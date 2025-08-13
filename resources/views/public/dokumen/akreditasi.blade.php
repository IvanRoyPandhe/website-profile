@extends('layouts.app')

@section('title', 'Akreditasi')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Akreditasi</h1>
        <p class="text-gray-600">Dokumen akreditasi Program Studi Gizi</p>
    </div>

    @if($akreditasi->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($akreditasi as $item)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Header dengan Title dan Description -->
                    @if($item->title || $item->description)
                        <div class="p-6 border-b">
                            @if($item->title)
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->title }}</h3>
                            @endif
                            @if($item->description)
                                <p class="text-gray-600 text-sm">{{ $item->description }}</p>
                            @endif
                        </div>
                    @endif
                    
                    <!-- Gambar -->
                    <div class="p-6">
                        <img src="{{ Storage::url($item->image) }}" 
                             alt="{{ $item->title }}" 
                             class="w-full h-48 object-cover rounded-lg shadow-md">
                    </div>
                    
                    <!-- Tombol Download -->
                    <div class="p-6 pt-0">
                        @if($item->link_download)
                            <a href="{{ $item->link_download }}" 
                               target="_blank"
                               class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download Dokumen
                            </a>
                        @else
                            <div class="w-full text-center py-2 text-gray-400 text-sm">
                                Dokumen tidak tersedia
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Dokumen</h3>
            <p class="text-gray-500">Dokumen akreditasi akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection