<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nursing Study Program')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Rich Text Content Styling */
        .rich-content { line-height: 1.7; }
        .rich-content h1 { font-size: 2rem; font-weight: 700; margin: 1.5rem 0 1rem 0; color: #1f2937; }
        .rich-content h2 { font-size: 1.5rem; font-weight: 600; margin: 1.25rem 0 0.75rem 0; color: #374151; }
        .rich-content h3 { font-size: 1.25rem; font-weight: 600; margin: 1rem 0 0.5rem 0; color: #4b5563; }
        .rich-content p { margin: 0.75rem 0; color: #6b7280; }
        .rich-content ul, .rich-content ol { margin: 1rem 0; padding-left: 1.5rem; }
        .rich-content li { margin: 0.25rem 0; color: #6b7280; }
        .rich-content table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; border: 1px solid #e5e7eb; }
        .rich-content th { background-color: #f9fafb; padding: 0.75rem; text-align: left; font-weight: 600; border: 1px solid #e5e7eb; color: #374151; }
        .rich-content td { padding: 0.75rem; border: 1px solid #e5e7eb; color: #6b7280; }
        .rich-content blockquote { border-left: 4px solid #3b82f6; background-color: #eff6ff; padding: 1rem; margin: 1rem 0; font-style: italic; color: #1e40af; }
        .rich-content a { color: #2563eb; text-decoration: none; }
        .rich-content a:hover { text-decoration: underline; }
        .rich-content strong { font-weight: 600; color: #1f2937; }
        .rich-content em { font-style: italic; color: #4b5563; }
        .text-left { text-align: left !important; }
        .text-center { text-align: center !important; }
        .text-right { text-align: right !important; }
        .text-justify { text-align: justify !important; }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nursing-blue': '#1e40af',
                        'nursing-light-blue': '#3b82f6',
                        'gizi-blue': '#1e40af',
                        'gizi-yellow': '#fbbf24',
                        'gizi-dark-blue': '#1e3a8a',
                    }
                }
            }
        }
    </script>
    <style>
        /* Enhanced Carousel Styles */
        .carousel-slide {
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
            background-color: #000;
        }
        
        .carousel-slide.active {
            opacity: 1;
        }
        
        .carousel-slide.fade-out {
            opacity: 0;
        }
        
        .carousel-slide.fade-in {
            opacity: 1;
        }
        
        /* Enhanced Carousel Indicators */
        .carousel-indicator {
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .carousel-indicator.active {
            background-color: white !important;
            transform: scale(1.4);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }
        
        .carousel-indicator::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s;
        }
        
        .carousel-indicator.active::before {
            left: 100%;
        }
        
        /* Simple Carousel Control */
        #nextSlide:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        #nextSlide:active {
            transform: translateY(-50%) scale(0.95);
        }
        
        /* Enhanced Hero Animations */
        @keyframes slideUp {
            0% { opacity: 0; transform: translateY(80px) scale(0.9); filter: blur(5px); }
            50% { opacity: 0.7; transform: translateY(20px) scale(0.95); filter: blur(2px); }
            100% { opacity: 1; transform: translateY(0) scale(1); filter: blur(0px); }
        }
        
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(50px) rotateX(90deg); }
            50% { opacity: 0.5; transform: translateY(10px) rotateX(45deg); }
            100% { opacity: 1; transform: translateY(0) rotateX(0deg); }
        }
        
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.1) rotate(-360deg); }
            30% { opacity: 0.7; transform: scale(1.1) rotate(-180deg); }
            60% { opacity: 1; transform: scale(0.9) rotate(0deg); }
            100% { opacity: 1; transform: scale(1) rotate(0deg); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(30, 64, 175, 0.4); }
            50% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(30, 64, 175, 0); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-5px) rotate(1deg); }
            50% { transform: translateY(-10px) rotate(0deg); }
            75% { transform: translateY(-5px) rotate(-1deg); }
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        
        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }
        
        @keyframes blink {
            0%, 50% { border-color: transparent; }
            51%, 100% { border-color: white; }
        }
        
        .animate-slide-up {
            animation: slideUp 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .animate-slide-up-delay {
            animation: slideUp 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.4s both;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.8s both;
        }
        
        .animate-bounce-in {
            animation: bounceIn 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .animate-title {
            animation: slideUp 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .pulse-animation {
            animation: pulse 3s infinite;
        }
        
        .animate-pulse-button {
            animation: pulse 2.5s infinite;
            background: linear-gradient(45deg, #ffffff, #f0f0f0, #ffffff);
            background-size: 200% 200%;
        }
        
        .animate-pulse-button:hover {
            animation: pulse 2.5s infinite, shimmer 1.5s infinite;
        }
        
        .icon-bounce:hover {
            animation: bounceIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        /* Typewriter Effect */
        .typewriter {
            overflow: hidden;
            border-right: 3px solid white;
            white-space: nowrap;
            animation: typewriter 3s steps(40, end), blink 0.75s step-end infinite;
        }
        
        /* Shimmer Effect */
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Glass Morphism */
        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Scroll Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .animate-on-scroll.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .feature-card {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .feature-card.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .news-card {
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        /* Floating Animation */
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Enhanced Gradient Background Animation */
        .gradient-animation {
            background: linear-gradient(-45deg, #1e40af, #3b82f6, #06b6d4, #0891b2, #8b5cf6, #1e40af);
            background-size: 600% 600%;
            animation: gradientShift 20s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            25% { background-position: 100% 50%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 0% 100%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Particle Effect */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-particle 15s infinite linear;
        }
        
        @keyframes float-particle {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Hover Effects */
        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(30, 64, 175, 0.3);
        }
        
        .hover-lift:hover {
            transform: translateY(-10px);
        }
        
        /* Luxury Scroll Animations */
        .luxury-fade-up {
            opacity: 0;
            transform: translateY(60px) scale(0.95);
            transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .luxury-fade-up.animate {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        
        .luxury-slide-left {
            opacity: 0;
            transform: translateX(-80px) rotate(-5deg);
            transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .luxury-slide-left.animate {
            opacity: 1;
            transform: translateX(0) rotate(0deg);
        }
        
        .luxury-slide-right {
            opacity: 0;
            transform: translateX(80px) rotate(5deg);
            transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .luxury-slide-right.animate {
            opacity: 1;
            transform: translateX(0) rotate(0deg);
        }
        
        .luxury-zoom-in {
            opacity: 0;
            transform: scale(0.8) rotateY(15deg);
            transition: all 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .luxury-zoom-in.animate {
            opacity: 1;
            transform: scale(1) rotateY(0deg);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation - Premium University Style -->
    <nav class="bg-gradient-to-r from-blue-800 via-blue-700 to-blue-800 shadow-2xl sticky top-0 z-50 border-b-4 border-yellow-400">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-3 md:py-4">
                <div class="flex items-center">
                    <div class="flex items-center space-x-2 sm:space-x-3">
                        <img src="{{ asset('umg-logo.png') }}" alt="UMG Logo" class="h-10 sm:h-12 md:h-14 w-auto object-contain hover:scale-110 transition-transform duration-300">
                        <div class="hidden sm:block">
                            <div class="text-white font-black text-sm sm:text-base md:text-lg">PRODI GIZI</div>
                            <div class="text-yellow-400 font-bold text-xs sm:text-sm">UM GRESIK</div>
                        </div>
                    </div>
                </div>
                
                <div class="hidden lg:flex items-center space-x-2 xl:space-x-4">
                    <a href="{{ route('home') }}" class="text-white hover:text-yellow-300 transition-all duration-200 py-2 px-2 xl:px-3 rounded-md hover:bg-white/10 font-medium text-sm xl:text-base {{ request()->routeIs('home') ? 'text-yellow-300 font-semibold bg-white/20' : '' }}">Beranda</a>
                    
                    <!-- Profile Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-all duration-200 flex items-center py-2 px-2 xl:px-3 rounded-md hover:bg-white/20 font-medium text-sm xl:text-base">
                            Profile
                            <svg class="w-3 h-3 xl:w-4 xl:h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-56 xl:w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('visi-misi') }}" class="block px-3 xl:px-4 py-2 xl:py-3 text-xs xl:text-sm text-gray-700 hover:bg-blue-600 hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Visi Keilmuan dan Tujuan</a>
                                <a href="{{ route('struktur-organisasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Struktur Organisasi</a>
                                <a href="{{ route('profile-dosen') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Profile Dosen</a>
                                <a href="{{ route('prospek-lulusan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Prospek Lulusan</a>
                                <a href="{{ route('biaya-pendidikan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Biaya Pendidikan</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Akademik Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Akademik
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('kurikulum') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Kurikulum dan Matakuliah</a>
                                <a href="{{ route('kalender-akademik') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Kalender Akademik</a>
                                <a href="{{ route('jadwal-kuliah') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Jadwal Kuliah</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kemahasiswaan Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Kemahasiswaan
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('hima') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">HIMA</a>
                                <a href="{{ route('ikahima') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">IKAHIMA</a>
                                <a href="{{ route('prestasi-mahasiswa') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Prestasi Mahasiswa</a>
                                <a href="{{ route('survey-pengguna') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Survey Pengguna</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dokumen Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Dokumen
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('akreditasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Akreditasi</a>
                                <a href="{{ route('kebijakan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Kebijakan</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Publikasi Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Publikasi
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('penelitian') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Penelitian</a>
                                <a href="{{ route('pengabdian') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Pengabdian</a>
                                <a href="{{ route('publikasi-jurnal') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Publikasi Jurnal</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informasi Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Informasi
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('berita') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Berita</a>
                                <a href="{{ route('agenda') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Agenda</a>
                                <a href="{{ route('kontak') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Kontak</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Penjaminan Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-yellow-300 transition-colors transition-all duration-200 flex items-center py-2 px-3 rounded-md hover:bg-white/20 font-medium">
                            Penjaminan
                            <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-1 w-64 bg-white rounded-lg shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('monitoring-evaluasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Monitoring & Evaluasi</a>
                                <a href="{{ route('rencana-tindak-lanjut') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors border-b border-gray-50 last:border-b-0">Rencana Tindak Lanjut</a>
                                <a href="{{ route('survei') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-nursing-blue hover:text-white transition-colors">Survei</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-yellow-300 p-2 rounded-md hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1 border-t border-yellow-400/30 mt-3 pt-3">
                <a href="{{ route('home') }}" class="block py-3 px-4 text-white hover:text-yellow-300 hover:bg-white/20 rounded-md transition-colors font-medium {{ request()->routeIs('home') ? 'text-yellow-300 font-semibold bg-white/20' : '' }}">Beranda</a>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-3 px-4 text-white hover:text-yellow-300 hover:bg-white/20 rounded-md transition-colors font-medium flex items-center justify-between">
                        Profile
                        <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1 mt-2">
                        <a href="{{ route('visi-misi') }}" class="block py-2 text-sm text-white hover:text-yellow-300 transition-colors">Visi Keilmuan dan Tujuan</a>
                        <a href="{{ route('struktur-organisasi') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Struktur Organisasi</a>
                        <a href="{{ route('profile-dosen') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Profile Dosen</a>
                        <a href="{{ route('prospek-lulusan') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Prospek Lulusan</a>
                        <a href="{{ route('biaya-pendidikan') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Biaya Pendidikan</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Akademik
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('kurikulum') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Kurikulum dan Matakuliah</a>
                        <a href="{{ route('kalender-akademik') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Kalender Akademik</a>
                        <a href="{{ route('jadwal-kuliah') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Jadwal Kuliah</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Kemahasiswaan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('hima') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">HIMA</a>
                        <a href="{{ route('ikahima') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">IKAHIMA</a>
                        <a href="{{ route('prestasi-mahasiswa') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Prestasi Mahasiswa</a>
                        <a href="{{ route('survey-pengguna') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Survey Pengguna</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Dokumen
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('akreditasi') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Akreditasi</a>
                        <a href="{{ route('kebijakan') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Kebijakan</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Publikasi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('penelitian') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Penelitian</a>
                        <a href="{{ route('pengabdian') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Pengabdian</a>
                        <a href="{{ route('publikasi-jurnal') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Publikasi Jurnal</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Informasi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('berita') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Berita</a>
                        <a href="{{ route('agenda') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Agenda</a>
                        <a href="{{ route('kontak') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Kontak</a>
                    </div>
                </div>
                
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-yellow-300 transition-colors flex items-center justify-between">
                        Penjaminan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                        <a href="{{ route('monitoring-evaluasi') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Monitoring & Evaluasi</a>
                        <a href="{{ route('rencana-tindak-lanjut') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Rencana Tindak Lanjut</a>
                        <a href="{{ route('survei') }}" class="block py-1 text-sm text-white hover:text-yellow-300 transition-colors">Survei</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer - Premium University Style -->
    <footer class="bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white py-16 relative overflow-hidden">
        <!-- Premium Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #fbbf24 2px, transparent 2px), radial-gradient(circle at 75% 75%, #1e40af 2px, transparent 2px); background-size: 60px 60px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12">
                <!-- Program Studi Info - Larger Section -->
                <div class="lg:col-span-4">
                    <div class="flex items-start space-x-4 mb-6">
                        <img src="{{ asset('umg-logo.png') }}" alt="UMG Logo" class="h-16 w-auto object-contain flex-shrink-0">
                        <div>
                            <h3 class="text-xl font-black text-white mb-1 leading-tight">Program Studi Ilmu Gizi</h3>
                            <p class="text-yellow-400 font-bold">Universitas Muhammadiyah Gresik</p>
                        </div>
                    </div>
                    <p class="text-blue-200 leading-relaxed mb-6 text-sm">Mencetak nutrisionis yang mandiri, kreatif, profesional dan unggul berasaskan Islam untuk kesehatan masyarakat yang lebih baik.</p>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-yellow-400 rounded-lg flex items-center justify-center">
                            <span class="text-blue-900 font-black">B</span>
                        </div>
                        <div>
                            <div class="text-white font-bold">Terakreditasi B</div>
                            <div class="text-blue-300 text-xs">BAN-PT</div>
                        </div>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="bg-white/5 rounded-lg p-4 backdrop-blur-sm">
                        <h4 class="font-bold text-white mb-3 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Hubungi Kami
                        </h4>
                        <div class="space-y-2 text-sm text-blue-200">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                +6231 395-1414
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                info@umg.ac.id
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lokasi -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Lokasi Kampus</h4>
                    <div class="space-y-4 text-xs text-blue-200">
                        <div class="bg-white/5 rounded-lg p-3">
                            <div class="font-semibold text-white mb-1 flex items-center">
                                <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span>
                                Kampus 1
                            </div>
                            <div class="leading-relaxed">Jl. Sumatera No. 101 GKB<br>Gresik 61121, Jawa Timur</div>
                        </div>
                        <div class="bg-white/5 rounded-lg p-3">
                            <div class="font-semibold text-white mb-1 flex items-center">
                                <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span>
                                Kampus 2
                            </div>
                            <div class="leading-relaxed">Jl. Proklamasi No. 54<br>Gresik 61111, Jawa Timur</div>
                        </div>
                    </div>
                </div>
                
                <!-- Layanan & Quick Links -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Layanan</h4>
                    <ul class="space-y-2 text-xs text-blue-200 mb-6">
                        <li><a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>PMB
                        </a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>SPADA
                        </a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>SIAKAD
                        </a></li>
                        <li><a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>E-perpus
                        </a></li>
                    </ul>
                    
                    <h4 class="font-bold text-white mb-3 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Quick Links</h4>
                    <ul class="space-y-2 text-xs text-blue-200">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>Beranda
                        </a></li>
                        <li><a href="{{ route('visi-misi') }}" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>Visi & Misi
                        </a></li>
                        <li><a href="{{ route('profile-dosen') }}" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>Profile Dosen
                        </a></li>
                        <li><a href="{{ route('kurikulum') }}" class="hover:text-yellow-400 transition-colors flex items-center">
                            <span class="w-1 h-1 bg-yellow-400 rounded-full mr-2"></span>Kurikulum
                        </a></li>
                    </ul>
                </div>
                
                <!-- Biro & Direktorat -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Biro</h4>
                    <ul class="space-y-1 text-xs text-blue-200 mb-6">
                        <li><a href="https://bpsi.umg.ac.id/" class="hover:text-yellow-400 transition-colors">BPSI</a></li>
                        <li><a href="https://baua.umg.ac.id/" class="hover:text-yellow-400 transition-colors">BAUA</a></li>
                        <li><a href="http://bsdm.umg.ac.id/" class="hover:text-yellow-400 transition-colors">BSDM</a></li>
                        <li><a href="https://keuangan.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Keuangan</a></li>
                        <li><a href="https://iro.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Kemitraan</a></li>
                        <li><a href="https://bdpaik.umg.ac.id/" class="hover:text-yellow-400 transition-colors">DPAIK</a></li>
                    </ul>
                    
                    <h4 class="font-bold text-white mb-3 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Direktorat & UPT</h4>
                    <ul class="space-y-1 text-xs text-blue-200">
                        <li><a href="https://bpm.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Penjaminan Mutu</a></li>
                        <li><a href="https://vokasi.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Vokasi & Sertifikasi</a></li>
                    </ul>
                </div>
                
                <!-- Fakultas -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold text-white mb-4 text-sm uppercase tracking-wide border-b border-yellow-400/30 pb-2">Fakultas</h4>
                    <ul class="space-y-1 text-xs text-blue-200">
                        <li><a href="http://fkip.umg.ac.id/" class="hover:text-yellow-400 transition-colors">FKIP</a></li>
                        <li><a href="https://feb.umg.ac.id/" class="hover:text-yellow-400 transition-colors">FEB</a></li>
                        <li><a href="http://fkes.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Kesehatan</a></li>
                        <li><a href="https://teknik.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Teknik</a></li>
                        <li><a href="https://umg.ac.id/" class="hover:text-yellow-400 transition-colors">Pertanian</a></li>
                        <li><a href="http://fai.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Agama Islam</a></li>
                        <li><a href="http://psikologi.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Psikologi</a></li>
                        <li><a href="http://fh.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Hukum</a></li>
                        <li><a href="http://pascasarjana.umg.ac.id/" class="hover:text-yellow-400 transition-colors">Pascasarjana</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="border-t border-yellow-400/30 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-center md:text-left">
                        <p class="text-blue-200 font-medium text-sm">&copy; {{ date('Y') }} Program Studi Ilmu Gizi UM Gresik. All rights reserved.</p>
                        <p class="text-blue-300 text-xs mt-1">Mencetak Nutrisionis Profesional Berasaskan Islam</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-yellow-400 rounded-lg flex items-center justify-center">
                                <span class="text-blue-900 font-black text-sm">B</span>
                            </div>
                            <span class="text-white font-bold text-sm">Terakreditasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Language Switcher Floating Button (Left) -->
    <div class="fixed bottom-6 left-6 z-50">
        <div class="relative group">
            <button id="language-toggle" class="bg-nursing-blue hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                </svg>
            </button>
            <div id="language-menu" class="absolute bottom-16 left-0 bg-white rounded-lg shadow-xl border border-gray-200 py-2 min-w-[120px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                <button onclick="switchLanguage('id')" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                    <span class="mr-2">🇮🇩</span>
                    <span>Indonesia</span>
                </button>
                <button onclick="switchLanguage('en')" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                    <span class="mr-2">🇺🇸</span>
                    <span>English</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Right Side Floating Buttons -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col space-y-3">
        <!-- Scroll to Top Button -->
        <button id="scroll-to-top" class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 opacity-0 invisible" onclick="scrollToTop()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
        
        <!-- Contact/Chat Button -->
        <a href="{{ route('kontak') }}" class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        </a>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Mobile dropdown functionality
        document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('svg');
                
                content.classList.toggle('hidden');
                arrow.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        });
        
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const totalSlides = slides.length;
        
        function showSlide(index) {
            const currentActive = document.querySelector('.carousel-slide.active');
            const nextSlide = slides[index];
            
            if (currentActive && currentActive !== nextSlide) {
                currentActive.classList.add('fade-out');
                
                setTimeout(() => {
                    currentActive.classList.remove('active', 'fade-out');
                    nextSlide.classList.add('fade-in', 'active');
                    
                    setTimeout(() => {
                        nextSlide.classList.remove('fade-in');
                    }, 50);
                }, 100);
            } else if (!currentActive) {
                nextSlide.classList.add('active');
            }
            
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.classList.add('active', 'bg-yellow-400', 'scale-125');
                    indicator.classList.remove('bg-white/40');
                } else {
                    indicator.classList.remove('active', 'bg-yellow-400', 'scale-125');
                    indicator.classList.add('bg-white/40');
                }
            });
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Auto-advance carousel
        if (totalSlides > 1) {
            setInterval(nextSlide, 12000);
        }
        
        // Carousel controls
        if (document.getElementById('nextSlide')) {
            document.getElementById('nextSlide').addEventListener('click', nextSlide);
        }
        if (document.getElementById('prevSlide')) {
            document.getElementById('prevSlide').addEventListener('click', prevSlide);
        }
        
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });
        
        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    
                    // Animate feature cards with stagger
                    if (entry.target.classList.contains('animate-on-scroll')) {
                        const cards = entry.target.querySelectorAll('.feature-card, .news-card');
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate');
                            }, index * 200);
                        });
                    }
                }
            });
        }, observerOptions);
        
        // Observe elements for scroll animations
        document.querySelectorAll('.animate-on-scroll, .luxury-fade-up, .luxury-slide-left, .luxury-slide-right, .luxury-zoom-in').forEach(el => {
            observer.observe(el);
        });
        
        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('#heroCarousel');
            if (heroSection) {
                heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
        
        // Enhanced icon animations
        document.querySelectorAll('.icon-bounce').forEach(icon => {
            icon.addEventListener('mouseenter', () => {
                icon.classList.add('float-animation');
                icon.style.transform = 'scale(1.1) rotate(5deg)';
            });
            icon.addEventListener('mouseleave', () => {
                icon.classList.remove('float-animation');
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        });
        
        // Add smooth reveal animation for elements
        const revealElements = document.querySelectorAll('.feature-card, .news-card');
        revealElements.forEach((element, index) => {
            element.style.animationDelay = `${index * 0.1}s`;
        });
        
        // Add magnetic effect to buttons
        document.querySelectorAll('a, button').forEach(element => {
            element.addEventListener('mousemove', (e) => {
                const rect = element.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                element.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.02)`;
            });
            
            element.addEventListener('mouseleave', () => {
                element.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });
        
        // Keyboard navigation for carousel
        document.addEventListener('keydown', (e) => {
            if (totalSlides > 1) {
                if (e.key === 'ArrowRight') nextSlide();
                if (e.key === 'ArrowLeft') prevSlide();
            }
        });
        
        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        const carouselTouch = document.getElementById('heroCarousel');
        if (carouselTouch) {
            carouselTouch.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });
            
            carouselTouch.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
        }
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) nextSlide();
                else prevSlide();
            }
        }
        
        // Language Switcher
        function switchLanguage(lang) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('lang', lang);
            window.location.href = currentUrl.toString();
        }
        
        // Initialize language from URL or localStorage
        const urlParams = new URLSearchParams(window.location.search);
        const selectedLang = urlParams.get('lang') || localStorage.getItem('language') || 'id';
        
        if (selectedLang) {
            localStorage.setItem('language', selectedLang);
            translatePage(selectedLang);
        }
        
        // Simple translation function
        function translatePage(lang) {
            const translations = {
                'id': {
                    'Home': 'Beranda',
                    'About Us': 'Tentang Kami',
                    'Academic Staff': 'Staf Akademik',
                    'Curriculum': 'Kurikulum',
                    'Contact Us': 'Hubungi Kami',
                    'Profile': 'Profil',
                    'Academic': 'Akademik',
                    'Student Affairs': 'Kemahasiswaan',
                    'Documents': 'Dokumen',
                    'Publications': 'Publikasi',
                    'Information': 'Informasi',
                    'Quality Assurance': 'Penjaminan Mutu'
                },
                'en': {
                    'Beranda': 'Home',
                    'Tentang Kami': 'About Us',
                    'Staf Akademik': 'Academic Staff',
                    'Kurikulum': 'Curriculum',
                    'Hubungi Kami': 'Contact Us',
                    'Profil': 'Profile',
                    'Akademik': 'Academic',
                    'Kemahasiswaan': 'Student Affairs',
                    'Dokumen': 'Documents',
                    'Publikasi': 'Publications',
                    'Informasi': 'Information',
                    'Penjaminan Mutu': 'Quality Assurance'
                }
            };
            
            const currentTranslations = translations[lang] || {};
            
            // Translate navigation menu
            document.querySelectorAll('nav a, nav button').forEach(element => {
                const text = element.textContent.trim();
                if (currentTranslations[text]) {
                    element.textContent = currentTranslations[text];
                }
            });
            
            // Translate page titles
            document.querySelectorAll('h1, h2, h3').forEach(element => {
                const text = element.textContent.trim();
                if (currentTranslations[text]) {
                    element.textContent = currentTranslations[text];
                }
            });
        }
        
        // Scroll to Top functionality
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        
        // Show/hide scroll to top button
        window.addEventListener('scroll', () => {
            const scrollButton = document.getElementById('scroll-to-top');
            if (window.pageYOffset > 300) {
                scrollButton.classList.remove('opacity-0', 'invisible');
                scrollButton.classList.add('opacity-100', 'visible');
            } else {
                scrollButton.classList.add('opacity-0', 'invisible');
                scrollButton.classList.remove('opacity-100', 'visible');
            }
        });
    </script>
</body>
</html>