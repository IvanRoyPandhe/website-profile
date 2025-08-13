@extends('layouts.app')

@section('title', 'Survey')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Survey</h1>
        <p class="text-gray-600">Kumpulan survey untuk Program Studi Gizi</p>
    </div>

    @if($surveys->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($surveys as $survey)
                <a href="{{ $survey->link_survey }}" target="_blank" 
                   class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-all duration-300 hover:scale-105 group">
                    <!-- Icon Survey -->
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center group-hover:from-blue-600 group-hover:to-purple-700 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Nama Survey -->
                    <h3 class="text-center text-gray-800 font-semibold text-sm group-hover:text-blue-600 transition-colors duration-300">
                        {{ $survey->nama_survey }}
                    </h3>
                    
                    <!-- Hover Effect -->
                    <div class="mt-3 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-xs text-blue-600 font-medium">Klik untuk mengisi survey</span>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="mx-auto h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Survey</h3>
            <p class="text-gray-500">Survey akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection