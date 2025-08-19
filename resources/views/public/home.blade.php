@extends('layouts.app')

@section('title', 'Beranda - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Hero Section - Modern University Design -->
<section class="relative h-screen overflow-hidden bg-gradient-to-br from-blue-800 via-blue-700 to-blue-900" style="margin-top: -80px; padding-top: 80px;">
    <!-- Geometric Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,193,7,0.3)" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-400 rounded-full mix-blend-soft-light filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-blue-300 rounded-full mix-blend-soft-light filter blur-3xl animate-bounce"></div>
    </div>
    
    <div id="heroCarousel" class="relative h-full w-full">
        @php
            $heroSlides = \App\Models\HeroSlide::active()->ordered()->get();
            // Sample slides if no data exists
            $sampleSlides = [
                [
                    'title' => 'ILMU GIZI',
                    'subtitle' => 'Mencetak Nutrisionis Profesional yang Mandiri, Kreatif, dan Unggul Berasaskan Islam',
                    'background_image' => 'https://picsum.photos/1920/1080?random=1',
                ],
                [
                    'title' => 'LABORATORIUM MODERN',
                    'subtitle' => 'Fasilitas Laboratorium Gizi Terlengkap dengan Teknologi Terkini untuk Pembelajaran Optimal',
                    'background_image' => 'https://picsum.photos/1920/1080?random=2',
                ],
                [
                    'title' => 'TERAKREDITASI B',
                    'subtitle' => 'Program Studi Terakreditasi dengan Kurikulum Berkualitas dan Dosen Berpengalaman',
                    'background_image' => 'https://picsum.photos/1920/1080?random=3',
                ]
            ];
            $slides = $heroSlides->count() > 0 ? $heroSlides : collect($sampleSlides);
        @endphp
        
        @forelse($slides as $index => $slide)
            <div class="carousel-slide {{ $index === 0 ? 'active' : '' }} absolute inset-0 text-white flex items-center" 
                 style="background: linear-gradient(rgba(30,64,175,0.7), rgba(30,64,175,0.5)), url('{{ $slide->background_image ? Storage::url($slide->background_image) : 'https://picsum.photos/1920/1080?random=' . ($index + 1) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-4xl mx-auto text-center transform transition-all duration-700">
                        <div class="mb-8">
                            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg animate-bounce">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                TERAKREDITASI B
                            </div>
                        </div>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black mb-6 md:mb-8 leading-tight">
                            <span class="block text-white">
                                {{ $slide->title ?? 'ILMU GIZI' }}
                            </span>
                            <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold bg-gradient-to-r from-yellow-300 to-yellow-500 bg-clip-text text-transparent mt-2 md:mt-4">
                                Universitas Muhammadiyah Gresik
                            </span>
                        </h1>
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 md:mb-12 text-blue-100 leading-relaxed max-w-5xl mx-auto font-medium px-4">
                            {{ $slide->subtitle ?? 'Mencetak Nutrisionis Profesional yang Mandiri, Kreatif, dan Unggul Berasaskan Islam' }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 md:gap-6 justify-center items-center mb-8 md:mb-16">
                            <a href="{{ route('kontak') }}" class="group relative px-6 sm:px-8 md:px-10 py-3 md:py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full font-bold text-blue-900 shadow-2xl hover:shadow-yellow-400/25 transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 text-sm md:text-base">
                                <span class="flex items-center">
                                    <svg class="w-5 h-5 md:w-6 md:h-6 mr-2 md:mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    DAFTAR SEKARANG
                                </span>
                            </a>
                            <a href="#about" class="group px-6 sm:px-8 md:px-10 py-3 md:py-4 border-2 md:border-3 border-yellow-400 rounded-full font-bold text-yellow-400 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 flex items-center text-sm md:text-base">
                                Pelajari Lebih Lanjut
                                <svg class="w-4 h-4 md:w-5 md:h-5 ml-2 md:ml-3 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        
                        <!-- Stats Row -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-6 max-w-4xl mx-auto px-4">
                            @foreach($heroStats as $stat)
                                <div class="text-center bg-white/10 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 border border-white/20">
                                    <div class="text-2xl md:text-3xl font-black text-yellow-400 mb-1">{{ $stat->title }}</div>
                                    <div class="text-xs md:text-sm text-blue-200 font-medium">{{ $stat->subtitle }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
        
        <!-- Carousel Navigation -->
        @if($slides->count() > 1)
            <!-- Previous/Next Buttons -->
            <button id="prevSlide" class="absolute left-2 sm:left-4 md:left-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 sm:p-3 rounded-full transition-all duration-300 hover:scale-110">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="nextSlide" class="absolute right-2 sm:right-4 md:right-6 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 sm:p-3 rounded-full transition-all duration-300 hover:scale-110">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            
            <!-- Carousel Indicators -->
            <div class="absolute bottom-16 sm:bottom-20 left-1/2 transform -translate-x-1/2 z-20 flex space-x-2 sm:space-x-3">
                @foreach($slides as $index => $slide)
                    <button class="carousel-indicator w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-white/40 hover:bg-white/60 transition-all duration-300 {{ $index === 0 ? 'active bg-yellow-400 scale-125' : '' }}" data-slide="{{ $index }}"></button>
                @endforeach
            </div>
        @endif
    </div>
    
    <!-- Floating Scroll Indicator -->
    @if($slides->count() <= 1)
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
            <a href="#about" class="flex flex-col items-center text-white/80 hover:text-white transition-colors duration-300">
                <span class="text-sm mb-2">Scroll</span>
                <div class="w-8 h-12 border-2 border-white/30 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
                </div>
            </a>
        </div>
    @endif
</section>

<!-- About Section - Modern University Design -->
<section id="about" class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Modern Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #1e40af 2px, transparent 2px), radial-gradient(circle at 75% 75%, #fbbf24 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full text-sm font-bold mb-8 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                </svg>
                TENTANG PROGRAM STUDI
            </div>
            <h2 class="text-4xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                {{ $aboutSection->title ?? 'Program Studi' }} <br>
                <span class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 bg-clip-text text-transparent">{{ $aboutSection->subtitle ?? 'Ilmu Gizi' }}</span>
            </h2>
            <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed font-medium">
                {{ $aboutSection->description ?? 'Mencetak nutrisionis profesional yang kompeten dalam pelayanan gizi masyarakat, klinik dietetik, dan manajemen penyediaan pangan dengan pendekatan Islam yang rahmatan lil alamiin.' }}
            </p>
        </div>
        
        @if($aboutSection && $aboutSection->accreditation_title)
        <!-- Accreditation Badge - Premium Design -->
        <div class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-3xl p-8 mb-20 shadow-2xl border-4 border-yellow-300 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-transparent"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-center">
                <div class="w-20 h-20 bg-blue-800 rounded-2xl flex items-center justify-center mr-8 mb-6 md:mb-0 shadow-xl">
                    <svg class="w-10 h-10 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <div class="text-center md:text-left">
                    <h3 class="text-3xl font-black text-blue-900 mb-3">{{ $aboutSection->accreditation_title }}</h3>
                    <p class="text-blue-800 font-bold text-lg">{{ $aboutSection->accreditation_sk }}</p>
                    <p class="text-blue-700 font-medium mt-2">{{ $aboutSection->accreditation_institution }}</p>
                </div>
            </div>
        </div>
        @endif
        
        <!-- Stats Grid - Modern University Style -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
            @foreach($aboutStats as $index => $stat)
                <div class="group bg-gradient-to-br {{ $index % 2 == 0 ? 'from-blue-600 to-blue-700 border-4 border-blue-500' : 'from-yellow-500 to-yellow-600 border-4 border-yellow-400' }} p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 {{ $index % 2 == 0 ? 'bg-yellow-400' : 'bg-blue-800' }} rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        @if($loop->last)
                            <svg class="w-8 h-8 {{ $index % 2 == 0 ? 'text-blue-900' : 'text-yellow-400' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @else
                            <span class="{{ $index % 2 == 0 ? 'text-blue-900' : 'text-yellow-400' }} font-black text-xl">{{ $stat->title }}</span>
                        @endif
                    </div>
                    <h4 class="text-lg font-bold {{ $index % 2 == 0 ? 'text-white' : 'text-blue-900' }} text-center mb-2">{{ $stat->subtitle }}</h4>
                    <p class="{{ $index % 2 == 0 ? 'text-blue-200' : 'text-blue-800' }} text-center text-sm">{{ $stat->description }}</p>
                </div>
            @endforeach
        </div>
        
        <!-- Features - Premium University Cards -->
        <div class="grid md:grid-cols-3 gap-10">
            @foreach($aboutFeatures as $index => $feature)
                <div class="group bg-white p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:-translate-y-4 border-t-8 {{ $index % 2 == 0 ? 'border-blue-600' : 'border-yellow-500' }} relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br {{ $index % 2 == 0 ? 'from-blue-100' : 'from-yellow-100' }} to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br {{ $index % 2 == 0 ? 'from-blue-600 to-blue-700' : 'from-yellow-500 to-yellow-600' }} rounded-2xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-xl">
                            @if($feature->icon && $feature->icon != 'null')
                                @php
                                    $iconComponent = str_replace('heroicon-o-', '', $feature->icon);
                                @endphp
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    @if($iconComponent == 'beaker')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    @elseif($iconComponent == 'user-group')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    @elseif($iconComponent == 'building-storefront')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0H5m14 0v2a1 1 0 01-1 1H6a1 1 0 01-1-1v-2m14 0V7a2 2 0 00-2-2H9a2 2 0 00-2 2v14"></path>
                                    @else
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    @endif
                                </svg>
                            @endif
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center group-hover:text-{{ $index % 2 == 0 ? 'blue' : 'yellow' }}-600 transition-colors duration-300">{{ $feature->title }}</h3>
                        <p class="text-gray-600 text-center leading-relaxed">{{ $feature->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us - Premium University Section -->
<section class="py-20 lg:py-32 bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 relative overflow-hidden">
    <!-- Premium Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-800/50 to-transparent"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-yellow-400/10 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 rounded-full text-sm font-black mb-8 shadow-2xl">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                {{ $whyChooseSection->badge_text ?? 'KEUNGGULAN PROGRAM STUDI' }}
            </div>
            <h2 class="text-4xl lg:text-6xl font-black text-white mb-8 leading-tight">
                {{ $whyChooseSection->title ?? 'Mengapa Memilih' }} <br>
                <span class="bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500 bg-clip-text text-transparent">{{ $whyChooseSection->subtitle ?? 'Program Gizi UMG?' }}</span>
            </h2>
            <p class="text-xl text-blue-100 max-w-4xl mx-auto font-medium leading-relaxed">
                {{ $whyChooseSection->description ?? 'Menjadi nutrisionis yang mandiri, kreatif, dan profesional dengan keunggulan kompetitif di era global' }}
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            @foreach($whyChoose as $feature)
                <div class="group bg-gradient-to-br from-white/20 to-white/10 backdrop-blur-lg rounded-3xl p-10 border-2 border-white/20 hover:border-yellow-400/50 transition-all duration-500 hover:-translate-y-6 hover:shadow-2xl hover:shadow-yellow-400/20 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-2xl">
                            @if($feature->icon && $feature->icon != 'null')
                                @php
                                    $iconComponent = str_replace('heroicon-o-', '', $feature->icon);
                                @endphp
                                <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    @if($iconComponent == 'book-open')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13M12 6.253c1.168-.776 2.754-1.253 4.5-1.253S19.832 5.477 21 6.253v13M12 6.253L8.5 4.5l7 3v13l-7-3z"></path>
                                    @elseif($iconComponent == 'beaker')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    @elseif($iconComponent == 'heart')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    @else
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    @endif
                                </svg>
                            @endif
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4 text-center group-hover:text-yellow-300 transition-colors duration-300">{{ $feature->title }}</h3>
                        <p class="text-blue-100 text-center leading-relaxed font-medium">{{ $feature->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Latest News - Premium University Layout -->
<section class="py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Premium Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: linear-gradient(45deg, #1e40af 25%, transparent 25%), linear-gradient(-45deg, #1e40af 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #fbbf24 75%), linear-gradient(-45deg, transparent 75%, #fbbf24 75%); background-size: 60px 60px; background-position: 0 0, 0 30px, 30px -30px, -30px 0px;"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="text-center mb-16 md:mb-20">
            <div class="inline-flex items-center px-4 sm:px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full text-xs sm:text-sm font-black mb-6 md:mb-8 shadow-2xl">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 mr-2 md:mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"/>
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v3a2 2 0 01-2 2H5a2 2 0 01-2-2V9a1 1 0 00-1 1v5.5a1.5 1.5 0 01-3 0V9a2 2 0 012-2h1V5a2 2 0 012-2h8a2 2 0 012 2v2z"/>
                </svg>
                <span class="hidden sm:inline">BERITA & INFORMASI TERKINI</span>
                <span class="sm:hidden">BERITA TERKINI</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-6 md:mb-8 leading-tight px-4">
                <span class="block sm:inline">Informasi </span>
                <span class="block sm:inline bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 bg-clip-text text-transparent">Terbaru</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-700 max-w-4xl mx-auto mb-8 md:mb-12 font-medium leading-relaxed px-4">
                Ikuti perkembangan terbaru dari program studi dan dunia gizi untuk tetap update dengan informasi terkini
            </p>
            <a href="{{ route('berita') }}" class="inline-flex items-center px-6 sm:px-8 md:px-10 py-3 md:py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 rounded-full font-bold hover:from-yellow-500 hover:to-yellow-600 transition-all duration-300 shadow-2xl hover:shadow-yellow-400/25 transform hover:scale-105 hover:-translate-y-1 text-sm md:text-base">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 mr-2 md:mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"/>
                </svg>
                <span class="hidden sm:inline">Lihat Semua Berita</span>
                <span class="sm:hidden">Semua Berita</span>
                <svg class="w-4 h-4 md:w-5 md:h-5 ml-2 md:ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @php
                $latestNews = \App\Models\Berita::published()->orderBy('published_at', 'desc')->limit(3)->get();
            @endphp
            @forelse($latestNews as $index => $article)
                <article class="group bg-white rounded-2xl md:rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 md:hover:-translate-y-4 border-t-4 md:border-t-8 border-blue-600 relative">
                    @if($article->featured_image)
                        <div class="aspect-video overflow-hidden relative">
                            <img src="{{ Storage::url($article->featured_image) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute top-3 md:top-4 left-3 md:left-4">
                                <span class="inline-block px-3 md:px-4 py-1 md:py-2 bg-yellow-400 text-blue-900 text-xs font-black rounded-full shadow-lg">
                                    {{ ucfirst($article->category) }}
                                </span>
                            </div>
                            <div class="absolute bottom-3 md:bottom-4 right-3 md:right-4">
                                <span class="inline-block px-2 md:px-3 py-1 bg-white/90 text-gray-800 text-xs font-bold rounded-full">
                                    {{ $article->published_at->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    @endif
                    <div class="p-4 sm:p-6 md:p-8">
                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 md:mb-4 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300 leading-tight">
                            <a href="{{ route('berita.detail', $article->slug) }}">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 md:mb-6 line-clamp-3 leading-relaxed text-sm sm:text-base">{{ Str::limit($article->excerpt, 120) }}</p>
                        <a href="{{ route('berita.detail', $article->slug) }}" 
                           class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 md:py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full font-bold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform group-hover:scale-105 text-sm md:text-base">
                            <span class="hidden sm:inline">Baca Selengkapnya</span>
                            <span class="sm:hidden">Baca</span>
                            <svg class="w-4 h-4 md:w-5 md:h-5 ml-1 md:ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-8 md:py-12">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1"></path>
                        </svg>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Belum Ada Berita</h3>
                    <p class="text-sm md:text-base text-gray-600 mb-4">Berita terbaru akan segera hadir</p>
                    <a href="{{ route('berita') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm md:text-base">Periksa Kembali →</a>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action - Premium University CTA -->
<section class="py-20 lg:py-32 bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 relative overflow-hidden">
    <!-- Premium Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 via-transparent to-blue-600/20"></div>
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="cta-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="rgba(251,191,36,0.3)"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#cta-grid)" />
            </svg>
        </div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="max-w-6xl mx-auto text-center">
            <div class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 rounded-full text-sm font-black mb-10 shadow-2xl animate-bounce">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                BERGABUNG DENGAN KAMI SEKARANG
            </div>
            <h2 class="text-5xl lg:text-7xl font-black text-white mb-8 leading-tight">
                Siap Menjadi <br>
                <span class="bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500 bg-clip-text text-transparent">Nutrisionis Profesional?</span>
            </h2>
            <p class="text-xl lg:text-2xl text-blue-100 mb-16 max-w-4xl mx-auto font-medium leading-relaxed">
                Bergabunglah dengan program gizi terdepan yang berasaskan Islam dan raih masa depan cemerlang sebagai ahli gizi profesional
            </p>
            
            <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-20">
                <a href="{{ route('kontak') }}" class="group relative px-12 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full font-black text-blue-900 shadow-2xl hover:shadow-yellow-400/30 transition-all duration-500 transform hover:scale-110 hover:-translate-y-2 text-lg">
                    <span class="flex items-center">
                        <svg class="w-7 h-7 mr-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        DAFTAR SEKARANG
                        <svg class="w-6 h-6 ml-4 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
                <a href="#about" class="group px-12 py-5 border-4 border-yellow-400 rounded-full font-black text-yellow-400 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-500 text-lg flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Pelajari Lebih Lanjut
                </a>
            </div>
            
            <!-- Trust Indicators - Premium Design -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($ctaTrust as $trust)
                    <div class="group bg-gradient-to-br from-white/20 to-white/10 backdrop-blur-lg rounded-2xl p-6 border-2 border-white/20 hover:border-yellow-400/50 transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl text-center">
                        <div class="text-4xl font-black text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">{{ $trust->title }}</div>
                        <div class="text-blue-200 font-bold">{{ $trust->subtitle }}</div>
                        <div class="text-blue-300 text-xs mt-1">{{ $trust->description }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Premium University Animations -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-10px) rotate(1deg); }
        50% { transform: translateY(-20px) rotate(0deg); }
        75% { transform: translateY(-10px) rotate(-1deg); }
    }
    
    @keyframes float-delay {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        33% { transform: translateY(-15px) rotate(2deg); }
        66% { transform: translateY(-25px) rotate(-1deg); }
    }
    
    @keyframes fade-in {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
    
    @keyframes fade-in-up {
        from { opacity: 0; transform: translateY(30px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    
    @keyframes premium-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(251, 191, 36, 0.3); }
        50% { box-shadow: 0 0 40px rgba(251, 191, 36, 0.6), 0 0 60px rgba(30, 64, 175, 0.3); }
    }
    
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    @keyframes bounce-in {
        0% { transform: scale(0.3) rotate(-10deg); opacity: 0; }
        50% { transform: scale(1.05) rotate(5deg); opacity: 0.8; }
        70% { transform: scale(0.9) rotate(-2deg); opacity: 0.9; }
        100% { transform: scale(1) rotate(0deg); opacity: 1; }
    }
    
    @keyframes slide-up-premium {
        from { 
            opacity: 0; 
            transform: translateY(50px) scale(0.9) rotateX(10deg); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0) scale(1) rotateX(0deg); 
        }
    }
    
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float-delay { animation: float-delay 8s ease-in-out infinite; }
    .animate-fade-in { animation: fade-in 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards; }
    .animate-fade-in-up { animation: fade-in-up 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards; }
    .animate-premium-glow { animation: premium-glow 3s ease-in-out infinite; }
    .animate-gradient-shift { 
        background: linear-gradient(-45deg, #1e40af, #3b82f6, #fbbf24, #f59e0b);
        background-size: 400% 400%;
        animation: gradient-shift 8s ease infinite;
    }
    .animate-bounce-in { animation: bounce-in 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards; }
    .animate-slide-up-premium { animation: slide-up-premium 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards; }
    
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-500 { animation-delay: 0.5s; }
    
    /* Premium hover effects */
    .hover-lift-premium:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .hover-glow-blue:hover {
        box-shadow: 0 0 30px rgba(30, 64, 175, 0.4);
    }
    
    .hover-glow-yellow:hover {
        box-shadow: 0 0 30px rgba(251, 191, 36, 0.4);
    }
    
    /* Text gradient animation */
    .text-gradient-animate {
        background: linear-gradient(-45deg, #1e40af, #3b82f6, #fbbf24, #f59e0b);
        background-size: 400% 400%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradient-shift 6s ease infinite;
    }
    
    /* Premium card hover */
    .card-premium:hover {
        transform: translateY(-12px) rotateY(5deg) rotateX(5deg);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }
    
    /* Smooth transitions */
    .transition-premium {
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
</style>
@endsection