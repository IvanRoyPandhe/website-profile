@extends('layouts.app')

@section('title', 'Akreditasi - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Akreditasi</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                AKREDITASI
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Dokumen <br>
                <span class="text-yellow-400">Akreditasi</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Dokumen resmi akreditasi Program Studi Ilmu Gizi
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
        @if($akreditasi->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mb-16">
                @foreach($akreditasi as $item)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-green-500 overflow-hidden">
                        <!-- Card Header -->
                        <div class="p-6 border-b border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    @if($item->title)
                                        <h3 class="text-xl font-bold text-gray-900">{{ $item->title }}</h3>
                                    @endif
                                </div>
                            </div>
                            @if($item->description)
                                <p class="text-gray-600 leading-relaxed">{{ $item->description }}</p>
                            @endif
                        </div>
                        
                        <!-- Document Preview -->
                        @if($item->image)
                            <div class="p-6">
                                <div class="relative group">
                                    <img src="{{ Storage::url($item->image) }}" 
                                         alt="{{ $item->title }}" 
                                         class="w-full h-48 object-cover rounded-lg shadow-md group-hover:shadow-lg transition-shadow">
                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all rounded-lg flex items-center justify-center">
                                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        <!-- Download Button -->
                        <div class="p-6 pt-0">
                            @if($item->link_download)
                                <a href="{{ $item->link_download }}" 
                                   target="_blank"
                                   class="w-full inline-flex items-center justify-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg transition-colors shadow-md">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Download Dokumen
                                </a>
                            @else
                                <div class="w-full text-center py-3 text-gray-400 text-sm font-medium bg-gray-50 rounded-lg">
                                    Dokumen tidak tersedia
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Accreditation Info -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-2xl p-8 lg:p-12 shadow-xl">
                <div class="text-center mb-8">
                    <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Tentang Akreditasi</h2>
                    <p class="text-green-100 text-lg font-medium">Komitmen Program Studi Gizi terhadap kualitas pendidikan</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Standar Kualitas</h3>
                        <p class="text-green-100 text-sm">Memenuhi standar<br>pendidikan nasional</p>
                    </div>
                    
                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Sertifikasi Resmi</h3>
                        <p class="text-green-100 text-sm">Diakui oleh<br>BAN-PT</p>
                    </div>
                    
                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Jaminan Mutu</h3>
                        <p class="text-green-100 text-sm">Lulusan berkualitas<br>dan kompeten</p>
                    </div>
                    
                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                        <div class="w-16 h-16 bg-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Pengakuan</h3>
                        <p class="text-green-100 text-sm">Diakui dunia<br>industri & akademik</p>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-2xl shadow-lg p-12 max-w-lg mx-auto border-t-4 border-green-500">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Dokumen Sedang Disiapkan</h3>
                    <p class="text-gray-600 text-lg">Dokumen akreditasi akan segera tersedia untuk diunduh.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection