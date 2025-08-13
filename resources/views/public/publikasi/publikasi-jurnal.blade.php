@extends('layouts.app')

@section('title', 'Publikasi Jurnal')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Publikasi Jurnal</h1>
        <p class="text-gray-600">Jurnal ilmiah yang diterbitkan Program Studi Gizi</p>
    </div>

    @if($publikasiJurnal->count() > 0)
        <div class="space-y-12">
            @foreach($publikasiJurnal as $jurnal)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col lg:flex-row">
                        <!-- Cover Jurnal -->
                        <div class="lg:w-1/3 p-8 flex justify-center items-start">
                            <div class="max-w-xs">
                                <img src="{{ Storage::url($jurnal->cover_image) }}" 
                                     alt="{{ $jurnal->nama_jurnal }}" 
                                     class="w-full h-auto rounded-lg shadow-md border">
                            </div>
                        </div>
                        
                        <!-- Deskripsi Jurnal -->
                        <div class="lg:w-2/3 p-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-6">{{ $jurnal->nama_jurnal }}</h2>
                            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! nl2br(e($jurnal->deskripsi)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="mx-auto h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Publikasi Jurnal</h3>
            <p class="text-gray-500">Publikasi jurnal akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection