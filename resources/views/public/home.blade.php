@extends('layouts.app')

@section('title', 'Beranda - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Modern Hero Carousel -->
<section class="relative h-screen overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 opacity-30">
            <div class="w-full h-full animate-pulse" style="background-image: radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%), radial-gradient(circle at 40% 80%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);"></div>
        </div>
    </div>
    
    <div id="heroCarousel" class="relative h-full w-full">
        @php
            $heroSlides = \App\Models\HeroSlide::active()->ordered()->get();
        @endphp
        
        @forelse($heroSlides as $index => $slide)
            <div class="carousel-slide {{ $index === 0 ? 'active' : '' }} absolute inset-0 text-white flex items-center" 
                 style="background: {{ $slide->background_image ? 'linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url(' . Storage::url($slide->background_image) . ')' : 'linear-gradient(135deg, ' . $slide->background_color . ', rgba(0,0,0,0.3))' }}; background-size: cover; background-position: center;">
                <div class="container mx-auto px-6 relative z-10">
                    <div class="max-w-4xl mx-auto text-center luxury-slide-right">
                        <div class="mb-6">
                            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium border border-white/20 mb-4">
                                Program Studi Ilmu Gizi
                            </span>
                        </div>
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                            <span class="bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
                                {{ $slide->title }}
                            </span>
                        </h1>
                        <p class="text-xl md:text-2xl mb-10 text-blue-100 leading-relaxed max-w-3xl mx-auto">
                            {{ $slide->subtitle }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            @if($slide->button_text && $slide->button_link)
                                <a href="{{ $slide->button_link }}" class="group relative px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl font-semibold text-white shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 hover:-translate-y-1">
                                    <span class="relative z-10">{{ $slide->button_text }}</span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-700 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                </a>
                            @endif
                            <a href="#about" class="px-8 py-4 border-2 border-white/30 rounded-xl font-semibold text-white backdrop-blur-sm hover:bg-white/10 transition-all duration-300">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="carousel-slide active absolute inset-0 text-white flex items-center">
                <div class="container mx-auto px-6 text-center">
                    <h1 class="text-6xl md:text-8xl font-bold mb-6 bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">Program Studi Ilmu Gizi</h1>
                    <p class="text-2xl mb-8 text-blue-100">Mencetak Nutrisionis Profesional dan Mandiri</p>
                </div>
            </div>
        @endforelse
    </div>
    
    <!-- Modern Carousel Controls -->
    <div class="absolute left-8 top-1/2 transform -translate-y-1/2 flex flex-col space-y-4 z-20">
        <button id="prevSlide" class="group bg-white/10 hover:bg-white/20 text-white w-12 h-12 rounded-full transition-all duration-300 backdrop-blur-md border border-white/20 hover:border-white/40 hover:scale-110">
            <svg class="w-5 h-5 mx-auto transition-transform group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="nextSlide" class="group bg-white/10 hover:bg-white/20 text-white w-12 h-12 rounded-full transition-all duration-300 backdrop-blur-md border border-white/20 hover:border-white/40 hover:scale-110">
            <svg class="w-5 h-5 mx-auto transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
    
    <!-- Modern Carousel Indicators -->
    @if($heroSlides->count() > 1)
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20">
            @foreach($heroSlides as $index => $slide)
                <button class="carousel-indicator {{ $index === 0 ? 'active' : '' }} w-3 h-3 bg-white/40 hover:bg-white/60 rounded-full transition-all duration-300 hover:scale-125" data-slide="{{ $index }}"></button>
            @endforeach
        </div>
    @endif
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 right-8 z-20">
        <a href="#about" class="flex flex-col items-center text-white/70 hover:text-white transition-colors duration-300">
            <span class="text-sm mb-2">Scroll</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/50 rounded-full mt-2 animate-bounce"></div>
            </div>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 relative overflow-hidden animate-on-scroll">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tl from-indigo-400/20 to-cyan-400/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 luxury-fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tentang Program Kami
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Program Studi Ilmu Gizi
                </span>
            </h2>
            <div class="max-w-4xl mx-auto text-xl text-gray-600 leading-relaxed">
                <p class="mb-6">Pendidikan S1 Ilmu Gizi untuk mencetak sumber daya kesehatan di bidang gizi yang kompeten guna membantu penyediaan pelayanan kesehatan bagi masyarakat terkait dengan gizi masyarakat, klinik dietetik (diet makanan untuk pasien), food service management/manajemen penyediaan pangan dan pengembangan entrepreneurship di bidang pangan.</p>
                <div class="bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-xl border-l-4 border-green-500 mb-6">
                    <h3 class="font-bold text-green-700 mb-2">AKREDITASI B</h3>
                    <p class="text-gray-700">Program Studi ini sudah mendapatkan akreditasi B dari LAM-PTkes dengan Nomor SK "0350/LAM-PTKes/Akr/Sar/XI/2020"</p>
                </div>
            </div>
        </div>
        
        <!-- Stats Section -->
        <div class="grid md:grid-cols-4 gap-8 mb-16 luxury-slide-left">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">B</h3>
                <p class="text-gray-600">Akreditasi LAM-PTkes</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">2030</h3>
                <p class="text-gray-600">Target Visi</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">S1</h3>
                <p class="text-gray-600">Jenjang Pendidikan</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">Multi</h3>
                <p class="text-gray-600">Prospek Karir</p>
            </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="grid md:grid-cols-3 gap-8 luxury-zoom-in">
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=500&h=400&fit=crop" alt="Laboratorium Gizi" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-green-900/90 via-green-600/50 to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Laboratorium Gizi</h3>
                        <p class="text-green-100">Fasilitas modern untuk analisis makanan dan gizi</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=500&h=400&fit=crop" alt="Praktik Dietetik" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-600/50 to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Praktik Dietetik</h3>
                        <p class="text-blue-100">Pengalaman langsung konsultasi gizi dan diet</p>
                    </div>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105">
                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=500&h=400&fit=crop" alt="Food Service Management" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-600/50 to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Food Service Management</h3>
                        <p class="text-purple-100">Manajemen penyediaan pangan dan entrepreneurship</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 relative overflow-hidden animate-on-scroll">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 luxury-fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white font-medium mb-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                </svg>
                Mengapa Memilih Kami
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-8">
                Keunggulan <span class="bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">Program Gizi</span>
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Menjadi nutrisionis yang mandiri, kreatif, profesional dan unggul di bidang gizi olahraga dan pengembangan produk pangan</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:border-white/40 transition-all duration-500 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Kurikulum Berkualitas</h3>
                    <p class="text-blue-100 leading-relaxed">Kurikulum yang sesuai dengan kompetensi gizi dan perkembangan global untuk menghasilkan tenaga gizi profesional</p>
                </div>
            </div>
            
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:border-white/40 transition-all duration-500 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mb-6 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Penelitian Unggul</h3>
                    <p class="text-blue-100 leading-relaxed">Mengembangkan penelitian unggul berdasarkan ilmu dan teknologi dalam bidang gizi</p>
                </div>
            </div>
            
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-teal-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition-opacity duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:border-white/40 transition-all duration-500 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-teal-500 rounded-2xl flex items-center justify-center mb-6 shadow-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Pengabdian Masyarakat</h3>
                    <p class="text-blue-100 leading-relaxed">Pengabdian masyarakat yang kreatif dan berkelanjutan untuk meningkatkan derajat kesehatan masyarakat</p>
                </div>
            </div>
        </div>
        
        <!-- Additional Features -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:border-white/20 transition-all duration-500">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white">Kerjasama Internasional</h4>
                </div>
                <p class="text-blue-100">Kerjasama di tingkat regional, nasional, dan internasional di bidang Tridharma</p>
            </div>
            <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:border-white/20 transition-all duration-500">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-teal-500 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white">Penjaminan Mutu</h4>
                </div>
                <p class="text-blue-100">Sistem penjaminan mutu internal dan eksternal untuk meningkatkan citra lembaga</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50 relative overflow-hidden animate-on-scroll">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-blue-200/30 to-purple-200/30 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-indigo-200/30 to-cyan-200/30 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 luxury-fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                Berita Terkini
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Informasi Terbaru
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">Ikuti perkembangan terbaru dari program studi dan dunia keperawatan</p>
            <a href="{{ route('berita') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl font-semibold hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Lihat Semua Berita
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 luxury-zoom-in">
            @php
                $latestNews = \App\Models\Berita::published()->orderBy('published_at', 'desc')->limit(3)->get();
            @endphp
            @forelse($latestNews as $index => $article)
                <article class="group bg-white rounded-2xl shadow-xl hover:shadow-2xl border border-gray-100 overflow-hidden transform transition-all duration-500 hover:scale-105">
                    @if($article->featured_image)
                        <div class="relative overflow-hidden">
                            <img src="{{ Storage::url($article->featured_image) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    @endif
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-medium rounded-full">
                                {{ ucfirst($article->category) }}
                            </span>
                            <span class="text-gray-500 text-sm font-medium">
                                {{ $article->published_at->format('d M Y') }}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('berita.detail', $article->slug) }}" class="hover:underline">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($article->excerpt, 120) }}</p>
                        <a href="{{ route('berita.detail', $article->slug) }}" 
                           class="inline-flex items-center text-blue-600 hover:text-purple-600 font-semibold transition-all duration-300 group-hover:translate-x-2">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center py-16">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Berita</h3>
                    <p class="text-gray-600 mb-6">Berita terbaru akan segera hadir. Silakan kembali lagi nanti.</p>
                    <a href="{{ route('berita') }}" class="text-blue-600 hover:text-purple-600 font-semibold transition-colors duration-300">Periksa Kembali →</a>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 relative overflow-hidden animate-on-scroll">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center luxury-slide-right">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white font-medium border border-white/20 mb-6">
                    Daftar Sekarang
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Siap Menjadi <span class="bg-gradient-to-r from-green-300 to-blue-300 bg-clip-text text-transparent">Nutrisionis</span> Profesional?
            </h2>
            <p class="text-2xl text-blue-100 mb-10 leading-relaxed">Bergabunglah dengan program gizi terdepan yang berasaskan Islam</p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('kontak') }}" class="group relative px-10 py-5 bg-white text-blue-600 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-white/25 transition-all duration-300 transform hover:scale-105 hover:-translate-y-2">
                    <span class="relative z-10">Mulai Sekarang</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute inset-0 bg-white rounded-2xl group-hover:bg-transparent transition-colors duration-300"></div>
                    <span class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 font-bold z-20">Mulai Sekarang</span>
                </a>
                <a href="#about" class="px-10 py-5 border-2 border-white/30 text-white rounded-2xl font-bold text-lg backdrop-blur-sm hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-white mb-2">B</div>
                    <div class="text-blue-200">Akreditasi LAM-PTkes</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white mb-2">2030</div>
                    <div class="text-blue-200">Target Visi</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white mb-2">Multi</div>
                    <div class="text-blue-200">Prospek Karir</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white mb-2">S1</div>
                    <div class="text-blue-200">Jenjang Pendidikan</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection