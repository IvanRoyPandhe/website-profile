@extends('layouts.app')

@section('title', 'Kalender Akademik - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-green-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Kalender Akademik
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Jadwal kegiatan akademik Program Studi Ilmu Gizi</p>
        </div>

        @if($kalenderAkademik->count() > 0)
            <div class="space-y-8">
                @foreach($kalenderAkademik as $kalender)
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    @if($kalender->title)
                    <div class="p-6 border-b border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 text-center">{{ $kalender->title }}</h2>
                        @if($kalender->description)
                        <p class="text-gray-600 text-center mt-2">{{ $kalender->description }}</p>
                        @endif
                    </div>
                    @endif
                    <div class="p-4">
                        <img src="{{ asset('storage/' . $kalender->image) }}" alt="{{ $kalender->title }}" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                    <p class="text-gray-600">Kalender akademik akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection