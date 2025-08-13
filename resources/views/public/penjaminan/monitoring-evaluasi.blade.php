@extends('layouts.app')

@section('title', 'Monitoring & Evaluasi')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Monitoring & Evaluasi</h1>
        <p class="text-gray-600">Laporan monitoring dan evaluasi Program Studi Gizi</p>
    </div>

    @if($monitoringByCluster->count() > 0)
        <div class="space-y-8">
            @foreach($monitoringByCluster as $cluster => $subClusters)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Header Cluster -->
                    <div class="bg-indigo-600 text-white px-6 py-4">
                        <h2 class="text-xl font-bold">{{ $cluster }}</h2>
                    </div>
                    
                    @foreach($subClusters as $subCluster => $monitoring)
                        <!-- Sub Cluster Header -->
                        <div class="bg-gray-100 px-6 py-3 border-b">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $subCluster }}</h3>
                        </div>
                        
                        <!-- Tabel Monitoring -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($monitoring as $item)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900 w-full">{{ $item->periode }}</td>
                                            <td class="px-6 py-4 text-center w-32">
                                                <a href="{{ $item->link_download }}" target="_blank" 
                                                   class="inline-flex items-center px-3 py-1 bg-indigo-600 text-white text-xs font-medium rounded hover:bg-indigo-700 transition-colors">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                    Unduh
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
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
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Laporan</h3>
            <p class="text-gray-500">Laporan monitoring dan evaluasi akan segera tersedia.</p>
        </div>
    @endif
</div>
@endsection