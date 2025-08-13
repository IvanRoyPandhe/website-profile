@extends('layouts.app')

@section('title', 'Penelitian')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Penelitian</h1>
        <p class="text-gray-600">Publikasi penelitian Program Studi Gizi</p>
    </div>

    @if($penelitianByTahun->count() > 0)
        <div class="space-y-8">
            @foreach($penelitianByTahun as $tahun => $penelitian)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Header Tahun -->
                    <div class="bg-green-600 text-white px-6 py-4">
                        <h2 class="text-xl font-bold">{{ $tahun }}</h2>
                    </div>
                    
                    <!-- Tabel Penelitian -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Penelitian</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Ketua Tim</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kepakaran Ketua Tim</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama dan Identitas Dosen Anggota Penelitian</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama dan Identitas Mahasiswa yang dilibatkan</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-32">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($penelitian as $item)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nomor }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->judul_penelitian }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_ketua_tim }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->kepakaran_ketua_tim }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_anggota_dosen ?: '–' }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->nama_mahasiswa ?: '–' }}</td>
                                        <td class="px-6 py-4 text-center">
                                            @if($item->link_unduh)
                                                <a href="{{ $item->link_unduh }}" target="_blank" 
                                                   class="inline-flex items-center px-3 py-1 bg-green-600 text-white text-xs font-medium rounded hover:bg-green-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    Unduh
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Data Penelitian</h3>
            <p class="text-gray-500">Data penelitian akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection