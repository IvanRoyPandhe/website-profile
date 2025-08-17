@extends('layouts.app')

@section('title', 'Struktur Organisasi - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Struktur Organisasi</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                STRUKTUR ORGANISASI
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Struktur <br>
                <span class="text-yellow-400">Organisasi</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Tim kepemimpinan Program Studi Ilmu Gizi yang berdedikasi untuk kemajuan pendidikan
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
        @if($struktur->count() > 0)
            <!-- Leadership Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:gap-10">
                @foreach($struktur as $index => $member)
                <div class="group relative">
                    <!-- Card -->
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-700 hover:-translate-y-6 border-t-8 border-blue-600 relative transform hover:scale-105">
                        <!-- Photo Section -->
                        <div class="relative h-72 sm:h-80 bg-gradient-to-br from-blue-50 to-blue-100 overflow-hidden">
                            @if($member->photo)
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <div class="w-32 h-32 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center shadow-2xl">
                                        <span class="text-white text-4xl font-black">{{ substr($member->name, 0, 1) }}</span>
                                    </div>
                                </div>
                            @endif
                            
                            <!-- Floating Badge -->
                            <div class="absolute top-4 right-4 bg-yellow-400 text-blue-900 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                #{{ $index + 1 }}
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-6 lg:p-8">
                            <div class="text-center">
                                <h3 class="text-xl lg:text-2xl font-black text-gray-900 mb-3 leading-tight break-words">{{ $member->name }}</h3>
                                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-full text-sm font-bold mb-4 shadow-lg">
                                    {{ $member->position }}
                                </div>
                                @if($member->nidn)
                                <div class="bg-gray-100 rounded-xl p-3 mb-4">
                                    <p class="text-gray-700 text-sm font-medium">NIDN: <span class="font-bold text-blue-600">{{ $member->nidn }}</span></p>
                                </div>
                                @endif
                                
                                <!-- Social Links -->
                                @if($member->facebook || $member->twitter || $member->instagram || $member->linkedin)
                                <div class="flex justify-center space-x-3 mt-4">
                                    @if($member->facebook)
                                    <a href="{{ $member->facebook }}" target="_blank" class="w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->twitter)
                                    <a href="{{ $member->twitter }}" target="_blank" class="w-10 h-10 bg-sky-500 hover:bg-sky-600 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->instagram)
                                    <a href="{{ $member->instagram }}" target="_blank" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.297-3.323C5.902 8.248 7.053 7.758 8.35 7.758s2.448.49 3.323 1.297c.897.897 1.387 2.048 1.387 3.345s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297zm7.718 0c-1.297 0-2.448-.49-3.323-1.297-.897-.897-1.387-2.048-1.387-3.345s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.897.897 1.387 2.048 1.387 3.345s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                        </svg>
                                    </a>
                                    @endif
                                    @if($member->linkedin)
                                    <a href="{{ $member->linkedin }}" target="_blank" class="w-10 h-10 bg-blue-700 hover:bg-blue-800 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-2 -right-2 w-20 h-20 bg-yellow-400/20 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute -bottom-2 -left-2 w-16 h-16 bg-blue-600/20 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Statistics Section -->
            <div class="mt-20 lg:mt-32">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-8 lg:p-12 shadow-2xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Tim Kepemimpinan</h2>
                        <p class="text-blue-100 text-lg font-medium">Statistik organisasi Program Studi Ilmu Gizi</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $struktur->count() }}</div>
                            <div class="text-blue-200 font-medium">Total Anggota</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $struktur->where('position', 'like', '%Ketua%')->count() }}</div>
                            <div class="text-blue-200 font-medium">Posisi Ketua</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $struktur->where('position', 'like', '%Dosen%')->count() }}</div>
                            <div class="text-blue-200 font-medium">Dosen</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $struktur->where('position', 'like', '%Staff%')->count() }}</div>
                            <div class="text-blue-200 font-medium">Staff</div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-3xl shadow-2xl p-12 max-w-lg mx-auto border-t-8 border-gray-300">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Belum Ada Data</h3>
                    <p class="text-gray-600 text-lg">Data struktur organisasi akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection