@extends('layouts.app')

@section('title', 'ILMAGI')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Ikatan Alumni Mahasiswa Gizi (ILMAGI)</h1>
        <p class="text-gray-600">Kegiatan dan program kerja Ikatan Alumni Mahasiswa Program Studi Gizi</p>
    </div>

    @if($kegiatanByPeriode->count() > 0)
        <div class="space-y-8">
            @foreach($kegiatanByPeriode as $periode => $kegiatan)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Header Periode -->
                    <div class="bg-green-600 text-white px-6 py-4">
                        <h2 class="text-xl font-bold">PERIODE {{ $periode }}</h2>
                    </div>
                    
                    <!-- Tabel Kegiatan -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Kegiatan</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Laporan</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($kegiatan as $item)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama_kegiatan }}</td>
                                        <td class="px-6 py-4 text-center">
                                            @if($item->link_laporan)
                                                <a href="{{ $item->link_laporan }}" target="_blank" 
                                                   class="inline-flex items-center px-3 py-1 bg-green-600 text-white text-xs font-medium rounded hover:bg-green-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    Laporan
                                                </a>
                                            @else
                                                <span class="text-gray-400 text-xs">Tidak tersedia</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if($item->link_dokumentasi)
                                                <a href="{{ $item->link_dokumentasi }}" target="_blank" 
                                                   class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded hover:bg-blue-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    Dokumentasi
                                                </a>
                                            @else
                                                <span class="text-gray-400 text-xs">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-gray-400 mb-4">
                <svg class="mx-auto h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Data Kegiatan</h3>
            <p class="text-gray-500">Data kegiatan ILMAGI akan segera diperbarui.</p>
        </div>
    @endif
</div>
@endsection