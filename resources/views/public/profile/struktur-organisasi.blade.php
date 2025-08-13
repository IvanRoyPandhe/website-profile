@extends('layouts.app')

@section('title', 'Struktur Organisasi - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Struktur Organisasi
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Program Studi Ilmu Gizi Fakultas Kesehatan Universitas Muhammadiyah Gresik</p>
        </div>

        @if($struktur->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($struktur as $member)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale fade-in">
                    <div class="h-80 bg-gray-200 flex items-center justify-center">
                        @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-24 h-24 bg-nursing-blue rounded-full flex items-center justify-center">
                                <span class="text-white text-2xl font-bold">{{ substr($member->name, 0, 1) }}</span>
                            </div>
                        @endif
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-nursing-blue mb-1">{{ $member->name }}</h3>
                        <p class="text-nursing-light-blue font-semibold mb-2 text-sm">{{ $member->position }}</p>
                        @if($member->nidn)
                        <p class="text-gray-600 text-xs">NIDN: {{ $member->nidn }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                    <p class="text-gray-600">Data struktur organisasi akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection