@extends('layouts.app')

@section('title', 'Prestasi Mahasiswa - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Prestasi Mahasiswa</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                PRESTASI MAHASISWA
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Prestasi <br>
                <span class="text-yellow-400">Mahasiswa</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Pencapaian dan prestasi gemilang mahasiswa Program Studi Ilmu Gizi
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
        @if($prestasi->count() > 0)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-amber-500 overflow-hidden">
                <!-- Header -->
                <div class="p-6 border-b border-gray-100">
                    <div class="flex items-center justify-center mb-2">
                        <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Daftar Prestasi Mahasiswa</h2>
                    </div>
                </div>
                
                <!-- Table -->
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b-2 border-gray-200">
                                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Nama Mahasiswa</th>
                                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Prestasi</th>
                                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Waktu</th>
                                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">Tingkat</th>
                                    <th class="px-6 py-4 text-center text-sm font-bold text-gray-900 uppercase tracking-wider">Dokumen</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($prestasi as $index => $item)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 break-words">{{ $item->nama_mahasiswa }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 break-words">{{ $item->prestasi }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $item->waktu_pencapaian }}</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-3 py-1 text-xs font-bold rounded-full 
                                            @if($item->tingkat == 'Internasional') bg-green-100 text-green-800 border border-green-200
                                            @elseif($item->tingkat == 'Nasional') bg-yellow-100 text-yellow-800 border border-yellow-200
                                            @else bg-blue-100 text-blue-800 border border-blue-200 @endif">
                                            {{ $item->tingkat }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($item->link_unduh)
                                            <a href="{{ $item->link_unduh }}" target="_blank" 
                                               class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg transition-colors shadow-md">
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
            
            <!-- Achievement Statistics -->
            <div class="mt-16">
                <div class="bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl p-8 lg:p-12 shadow-xl">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Statistik Prestasi</h2>
                        <p class="text-amber-100 text-lg font-medium">Pencapaian mahasiswa Program Studi Ilmu Gizi berdasarkan tingkat kompetisi</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Total Prestasi</h3>
                            <p class="text-amber-100 text-sm">{{ $prestasi->count() }} Pencapaian<br>Mahasiswa</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Internasional</h3>
                            <p class="text-amber-100 text-sm">{{ $prestasi->where('tingkat', 'Internasional')->count() }} Prestasi<br>Tingkat Dunia</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Nasional</h3>
                            <p class="text-amber-100 text-sm">{{ $prestasi->where('tingkat', 'Nasional')->count() }} Prestasi<br>Tingkat Nasional</p>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">Regional</h3>
                            <p class="text-amber-100 text-sm">{{ $prestasi->whereNotIn('tingkat', ['Internasional', 'Nasional'])->count() }} Prestasi<br>Tingkat Regional</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-amber-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Belum Ada Data Prestasi</h3>
                    <p class="text-gray-600 text-lg">Data prestasi mahasiswa akan segera diperbarui.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection