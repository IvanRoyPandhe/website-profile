@extends('layouts.app')

@section('title', 'Penelitian - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Penelitian</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                </svg>
                PENELITIAN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Publikasi <br>
                <span class="text-yellow-400">Penelitian</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Hasil penelitian dan karya ilmiah Program Studi Ilmu Gizi
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
        @if($penelitianByTahun->count() > 0)
            <div class="space-y-8">
                @foreach($penelitianByTahun as $tahun => $penelitian)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-green-500 overflow-hidden">
                        <!-- Header Tahun -->
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold">Penelitian Tahun {{ $tahun }}</h2>
                            </div>
                        </div>
                        
                        <!-- Tabel Penelitian -->
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead>
                                        <tr class="border-b-2 border-gray-200">
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider w-16">No</th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Judul Penelitian</th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Ketua Tim</th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Kepakaran</th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Anggota Dosen</th>
                                            <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Mahasiswa</th>
                                            <th class="px-6 py-4 text-center text-sm font-bold text-gray-900 uppercase tracking-wider w-32">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        @foreach($penelitian as $item)
                                            <tr class="hover:bg-gray-50 transition-colors">
                                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nomor }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900 break-words">{{ $item->judul_penelitian }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_ketua_tim }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->kepakaran_ketua_tim }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_anggota_dosen ?: '–' }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_mahasiswa ?: '–' }}</td>
                                                <td class="px-6 py-4 text-center">
                                                    @if($item->link_unduh)
                                                        <a href="{{ $item->link_unduh }}" target="_blank" 
                                                           class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-lg transition-colors shadow-md">
                                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                            </svg>
                                                            Unduh
                                                        </a>
                                                    @else
                                                        <span class="text-gray-400 text-sm font-medium">Tidak tersedia</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-green-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Data Sedang Disiapkan</h3>
                    <p class="text-gray-600 text-lg">Data penelitian akan segera tersedia untuk diunduh.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection