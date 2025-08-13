@extends('layouts.app')

@section('title', 'Visi Keilmuan dan Tujuan - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Visi Keilmuan dan Tujuan
                </span>
            </h1>
        </div>

        @if($visiMisi)
        <!-- Visi -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Visi</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                {{ $visiMisi->visi }}
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Misi</h2>
            <div class="text-lg text-gray-700 leading-relaxed">
                {!! nl2br(e($visiMisi->misi)) !!}
            </div>
        </div>

        @if($visiMisi->tujuan)
        <!-- Tujuan -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Tujuan</h2>
            <div class="text-lg text-gray-700 leading-relaxed">
                {!! nl2br(e($visiMisi->tujuan)) !!}
            </div>
        </div>
        @endif
        @else
        <div class="text-center py-12">
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                <p class="text-gray-600">Data visi dan misi akan segera ditambahkan.</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection