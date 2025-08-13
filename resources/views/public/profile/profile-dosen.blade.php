@extends('layouts.app')

@section('title', 'Profil Dosen - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <nav class="text-sm text-gray-600 mb-4">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <span>Profil Dosen</span>
            </nav>
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Profil Dosen
                </span>
            </h1>
        </div>

        @if($staff->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($staff as $lecturer)
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        @if($lecturer->photo)
                            <div class="h-64 overflow-hidden">
                                <img src="{{ Storage::url($lecturer->photo) }}" alt="{{ $lecturer->name }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="h-64 bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                {{ $lecturer->title ? $lecturer->title . ' ' : '' }}{{ $lecturer->name }}
                            </h3>
                            
                            <div class="space-y-2 mb-4">
                                @if($lecturer->nip)
                                    <div class="flex items-center text-sm text-gray-600">
                                        <span class="font-semibold w-20">NIP</span>
                                        <span class="mx-2">:</span>
                                        <span>{{ $lecturer->nip }}</span>
                                    </div>
                                @endif
                                
                                @if($lecturer->nidn)
                                    <div class="flex items-center text-sm text-gray-600">
                                        <span class="font-semibold w-20">NIDN</span>
                                        <span class="mx-2">:</span>
                                        <span>{{ $lecturer->nidn }}</span>
                                    </div>
                                @endif
                                
                                <div class="flex items-center text-sm text-gray-600">
                                    <span class="font-semibold w-20">Email</span>
                                    <span class="mx-2">:</span>
                                    <a href="mailto:{{ $lecturer->email }}" class="text-blue-600 hover:underline">{{ $lecturer->email }}</a>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <span class="font-semibold text-gray-900 text-sm">Bidang Keahlian:</span>
                                <p class="text-gray-600 text-sm mt-1">{{ $lecturer->expertise }}</p>
                            </div>
                            
                            <div class="flex space-x-2">
                                @if($lecturer->sinta_url)
                                    <a href="{{ $lecturer->sinta_url }}" target="_blank" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors">
                                        SINTA
                                    </a>
                                @endif
                                
                                @if($lecturer->scopus_url)
                                    <a href="{{ $lecturer->scopus_url }}" target="_blank" class="bg-orange-500 hover:bg-orange-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors">
                                        SCOPUS
                                    </a>
                                @endif
                                
                                @if($lecturer->scholar_url)
                                    <a href="{{ $lecturer->scholar_url }}" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors">
                                        GOOGLE SCHOLAR
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum Ada Data Dosen</h3>
                    <p class="text-gray-600">Data profil dosen akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection