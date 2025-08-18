@extends('layouts.app')

@section('title', 'HIMA - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">HIMA</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                </svg>
                HIMPUNAN MAHASISWA
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                HIMA <br>
                <span class="text-yellow-400">GIZI</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Kegiatan dan program kerja Himpunan Mahasiswa Program Studi Ilmu Gizi
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
        @if($kegiatanByPeriode->count() > 0)
            <div class="space-y-8">
                @foreach($kegiatanByPeriode as $periode => $kegiatan)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-orange-500 overflow-hidden">
                    <!-- Header Periode -->
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex items-center justify-center mb-2">
                            <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">PERIODE {{ $periode }}</h2>
                        </div>
                    </div>
                    
                    <!-- Tabel Kegiatan -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead>
                                    <tr class="border-b-2 border-gray-200">
                                        <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Nama Kegiatan</th>
                                        <th class="px-6 py-4 text-center text-sm font-bold text-gray-900 uppercase tracking-wider">Laporan</th>
                                        <th class="px-6 py-4 text-center text-sm font-bold text-gray-900 uppercase tracking-wider">Dokumentasi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @foreach($kegiatan as $item)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 break-words">{{ $item->nama_kegiatan }}</td>
                                        <td class="px-6 py-4 text-center">
                                            @if($item->link_laporan)
                                                <a href="{{ $item->link_laporan }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-lg transition-colors shadow-md">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    Laporan
                                                </a>
                                            @else
                                                <span class="text-gray-400 text-sm font-medium">Tidak tersedia</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if($item->link_dokumentasi)
                                                <a href="{{ $item->link_dokumentasi }}" target="_blank" 
                                                   class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg transition-colors shadow-md">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    Dokumentasi
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
            
            <!-- HIMA Information -->
            <div class="mt-16">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 lg:p-12 shadow-xl">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Tentang HIMAGIZ</h2>
                        <p class="text-orange-100 text-lg font-medium">Informasi dan kegiatan Himpunan Mahasiswa Program Studi Ilmu Gizi</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Organisasi</h3>
                            <p class="text-orange-100 text-sm">Himpunan Mahasiswa<br>Program Studi</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Kegiatan</h3>
                            <p class="text-orange-100 text-sm">Program Kerja<br>Berkelanjutan</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Prestasi</h3>
                            <p class="text-orange-100 text-sm">Pencapaian<br>Mahasiswa</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Pengembangan</h3>
                            <p class="text-orange-100 text-sm">Soft Skills<br>& Leadership</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-orange-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Belum Ada Data Kegiatan</h3>
                    <p class="text-gray-600 text-lg">Data kegiatan HIMAGIZ akan segera diperbarui.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection