@extends('layouts.app')

@section('title', 'Prospek Lulusan - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-green-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Prospek Lulusan
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Peluang karir yang luas untuk lulusan Program Studi Ilmu Gizi</p>
        </div>

        <!-- Prospek Lulusan -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Prospek Lulusan</h2>
            @if($prospekLulusan->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($prospekLulusan as $index => $lulusan)
                    <div class="bg-gradient-to-br from-{{ ['blue', 'green', 'purple', 'orange', 'red', 'teal'][$index % 6] }}-50 to-{{ ['blue', 'green', 'purple', 'orange', 'red', 'teal'][$index % 6] }}-100 p-6 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 bg-{{ ['blue', 'green', 'purple', 'orange', 'red', 'teal'][$index % 6] }}-500 rounded-2xl flex items-center justify-center mb-4">
                            @if($lulusan->icon)
                                <img src="{{ asset('storage/' . $lulusan->icon) }}" alt="{{ $lulusan->title }}" class="w-8 h-8 object-contain">
                            @else
                                <span class="text-white text-2xl font-bold">{{ substr($lulusan->title, 0, 1) }}</span>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-{{ ['blue', 'green', 'purple', 'orange', 'red', 'teal'][$index % 6] }}-700 mb-3">{{ $lulusan->title }}</h3>
                        <p class="text-gray-600">{{ $lulusan->description }}</p>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500">Belum ada data prospek lulusan.</p>
                </div>
            @endif
        </div>

        <!-- Prospek Kerja -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Prospek Kerja</h2>
            @if($prospekKerja->count() > 0)
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($prospekKerja as $index => $kerja)
                    <div class="bg-gradient-to-br from-{{ ['indigo', 'pink'][$index % 2] }}-50 to-{{ ['indigo', 'pink'][$index % 2] }}-100 p-8 rounded-xl hover:shadow-lg transition-shadow">
                        <div class="w-20 h-20 bg-{{ ['indigo', 'pink'][$index % 2] }}-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            @if($kerja->icon)
                                <img src="{{ asset('storage/' . $kerja->icon) }}" alt="{{ $kerja->title }}" class="w-10 h-10 object-contain">
                            @else
                                <span class="text-white text-3xl font-bold">{{ substr($kerja->title, 0, 1) }}</span>
                            @endif
                        </div>
                        <h3 class="text-2xl font-bold text-{{ ['indigo', 'pink'][$index % 2] }}-700 mb-4 text-center">{{ $kerja->title }}</h3>
                        <div class="text-gray-600">{!! nl2br(e($kerja->description)) !!}</div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500">Belum ada data prospek kerja.</p>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection