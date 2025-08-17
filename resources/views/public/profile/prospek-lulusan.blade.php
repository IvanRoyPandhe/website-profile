@extends('layouts.app')

@section('title', 'Prospek Lulusan - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Hero Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-blue-800 via-blue-700 to-blue-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #fbbf24 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-blue-200">
                <a href="{{ route('home') }}" class="hover:text-yellow-300 transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-yellow-300 font-medium">Prospek Lulusan</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                </svg>
                PROSPEK LULUSAN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Prospek <br>
                <span class="text-yellow-400">Lulusan</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Peluang karir yang luas dan menjanjikan untuk lulusan Program Studi Ilmu Gizi
            </p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: linear-gradient(45deg, #1e40af 25%, transparent 25%), linear-gradient(-45deg, #1e40af 25%, transparent 25%); background-size: 60px 60px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <!-- Prospek Lulusan Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-black text-gray-900 mb-4">Prospek Lulusan</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Berbagai bidang karir yang dapat dijalani setelah lulus</p>
            </div>

            @if($prospekLulusan->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($prospekLulusan as $lulusan)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-blue-600 p-6">
                        <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
                            @if($lulusan->icon)
                                <img src="{{ asset('storage/' . $lulusan->icon) }}" alt="{{ $lulusan->title }}" class="w-8 h-8 object-contain">
                            @else
                                <span class="text-white text-xl font-bold">{{ substr($lulusan->title, 0, 1) }}</span>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 break-words">{{ $lulusan->title }}</h3>
                        <p class="text-gray-600 text-sm break-words">{{ $lulusan->description }}</p>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md mx-auto">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                        <p class="text-gray-600">Data prospek lulusan akan segera ditambahkan.</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Prospek Kerja Section -->
        <div>
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-black text-gray-900 mb-4">Prospek Kerja</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Peluang karir spesifik di berbagai sektor industri</p>
            </div>

            @if($prospekKerja->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($prospekKerja as $kerja)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-yellow-500 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-yellow-500 rounded-xl flex items-center justify-center mr-4">
                                @if($kerja->icon)
                                    <img src="{{ asset('storage/' . $kerja->icon) }}" alt="{{ $kerja->title }}" class="w-8 h-8 object-contain">
                                @else
                                    <span class="text-white text-xl font-bold">{{ substr($kerja->title, 0, 1) }}</span>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 break-words">{{ $kerja->title }}</h3>
                        </div>
                        <div class="text-gray-600 break-words">{!! nl2br(e($kerja->description)) !!}</div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md mx-auto">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                        <p class="text-gray-600">Data prospek kerja akan segera ditambahkan.</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Statistics Section -->
        <div class="mt-20">
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-8 lg:p-12 shadow-xl">
                <div class="text-center mb-10">
                    <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Peluang Karir</h2>
                    <p class="text-blue-100 text-lg font-medium">Statistik peluang kerja lulusan Program Studi Ilmu Gizi</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-4xl font-black text-white mb-2">{{ $prospekLulusan->count() }}</div>
                        <div class="text-blue-200 font-medium">Bidang Karir</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="text-4xl font-black text-white mb-2">{{ $prospekKerja->count() }}</div>
                        <div class="text-blue-200 font-medium">Sektor Kerja</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                            </svg>
                        </div>
                        <div class="text-4xl font-black text-white mb-2">95%</div>
                        <div class="text-blue-200 font-medium">Tingkat Kerja</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                            </svg>
                        </div>
                        <div class="text-4xl font-black text-white mb-2">6 Bulan</div>
                        <div class="text-blue-200 font-medium">Rata-rata Tunggu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection