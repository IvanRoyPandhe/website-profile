@extends('layouts.app')

@section('title', 'Visi Keilmuan dan Tujuan - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Header Section -->
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
                <span class="text-yellow-300 font-medium">Visi Keilmuan dan Tujuan</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
                VISI KEILMUAN DAN TUJUAN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Visi Keilmuan <br>
                <span class="text-yellow-400">dan Tujuan</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Membangun fondasi keilmuan yang kuat untuk mencetak nutrisionis profesional yang unggul dan berintegritas
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

        @if($visiMisi)
        <!-- Visi Section -->
        <div id="visi" class="mb-16">
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-8 md:p-12 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-yellow-400/20 rounded-full -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full -ml-16 -mb-16"></div>
                <div class="relative z-10">
                    <div class="text-center mb-10">
                        <div class="w-20 h-20 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                            <svg class="w-10 h-10 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-4">Visi</h2>
                        <p class="text-blue-100 font-medium text-lg">Pandangan masa depan program studi</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 mb-10">
                        <p class="text-xl text-white leading-relaxed font-medium text-center break-words">
                            {{ $visiMisi->visi }}
                        </p>
                    </div>
                    
                    <!-- Achievement Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-900 font-black text-2xl">B</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Terakreditasi B</h3>
                            <p class="text-blue-200 text-sm">Program Studi Terakreditasi</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <span class="text-blue-900 font-black text-lg">2030</span>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Target Visi</h3>
                            <p class="text-blue-200 text-sm">Pencapaian Visi 2030</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Misi Section -->
        <div id="misi" class="mb-16">
            <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:-translate-y-4 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-40 h-40 bg-blue-600/20 rounded-full -ml-20 -mt-20"></div>
                <div class="absolute bottom-0 right-0 w-32 h-32 bg-white/20 rounded-full -mr-16 -mb-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-8">
                        <div class="w-16 h-16 bg-blue-900 rounded-2xl flex items-center justify-center mr-6 shadow-xl">
                            <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-4xl font-black text-blue-900 mb-2">Misi</h2>
                            <p class="text-blue-800 font-medium">Langkah strategis mencapai visi</p>
                        </div>
                    </div>
                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 border border-white/30">
                        <div class="text-xl text-blue-900 leading-relaxed font-medium break-words">
                            {!! nl2br(e($visiMisi->misi)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($visiMisi->tujuan)
        <!-- Tujuan Section -->
        <div class="bg-white p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:-translate-y-4 border-t-8 border-blue-600 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-100 to-transparent rounded-full -mr-20 -mt-20"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-yellow-100 to-transparent rounded-full -ml-16 -mb-16"></div>
            <div class="relative z-10">
                <div class="text-center mb-12">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-black text-gray-900 mb-4">Tujuan</h2>
                    <p class="text-xl text-gray-600 font-medium">Sasaran konkret yang ingin dicapai</p>
                </div>
                <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8">
                    <div class="text-lg text-gray-700 leading-relaxed break-words overflow-hidden">
                        {!! nl2br(e($visiMisi->tujuan)) !!}
                    </div>
                </div>
            </div>
        </div>
        @endif
        @else
        <div class="text-center py-12">
            <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-md mx-auto border-t-8 border-gray-300">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data</h3>
                <p class="text-gray-600">Data visi dan misi akan segera ditambahkan.</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection