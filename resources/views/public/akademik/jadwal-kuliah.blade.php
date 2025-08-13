@extends('layouts.app')

@section('title', 'Jadwal Kuliah')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Jadwal Kuliah</h1>
        <p class="text-gray-600">Jadwal perkuliahan Program Studi Gizi</p>
    </div>

    @if($jadwalKuliah->count() > 0)
        <div class="space-y-8">
            @foreach($jadwalKuliah as $jadwal)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @if($jadwal->title)
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $jadwal->title }}</h2>
                            @if($jadwal->description)
                                <p class="text-gray-600 mt-2">{{ $jadwal->description }}</p>
                            @endif
                        </div>
                    @endif
                    
                    <div class="p-6">
                        <img src="{{ Storage::url($jadwal->image) }}" 
                             alt="{{ $jadwal->title }}" 
                             class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="mx-auto h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h8m-8 0V7a2 2 0 012-2h4a2 2 0 012 2v4"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Jadwal</h3>
            <p class="text-gray-500">Jadwal kuliah akan segera diperbarui.</p>
        </div>
    @endif
</div>
@endsection