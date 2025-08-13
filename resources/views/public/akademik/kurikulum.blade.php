@extends('layouts.app')

@section('title', 'Kurikulum dan Matakuliah - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Kurikulum dan Matakuliah
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Struktur kurikulum Program Studi Ilmu Gizi yang komprehensif dan sesuai standar nasional</p>
        </div>

        @if($kurikulumContent->count() > 0)
            <div class="space-y-8">
                @foreach($kurikulumContent as $content)
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                        @if($content->title)
                            <div class="p-8 border-b">
                                <h2 class="text-2xl font-semibold text-gray-800">{{ $content->title }}</h2>
                                @if($content->description)
                                    <p class="text-gray-600 mt-2">{{ $content->description }}</p>
                                @endif
                            </div>
                        @endif
                        
                        <div class="p-8">
                            <img src="{{ Storage::url($content->image) }}" 
                                 alt="{{ $content->title }}" 
                                 class="w-full h-auto rounded-lg shadow-md">
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                    <p class="text-gray-600">Konten kurikulum akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection