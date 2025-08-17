@extends('layouts.app')

@section('title', 'Profil Dosen - Program Studi Ilmu Gizi UM Gresik')

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
                <span class="text-yellow-300 font-medium">Profil Dosen</span>
            </div>
        </nav>
        
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                </svg>
                PROFIL DOSEN
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Profil <br>
                <span class="text-yellow-400">Dosen</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Tim dosen berkualitas dengan keahlian di bidang ilmu gizi dan kesehatan
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
        @if($staff->count() > 0)
            <!-- Faculty Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @foreach($staff as $lecturer)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-t-4 border-blue-600">
                    <!-- Photo Section -->
                    <div class="h-64 overflow-hidden">
                        @if($lecturer->photo)
                            <img src="{{ Storage::url($lecturer->photo) }}" alt="{{ $lecturer->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Content Section -->
                    <div class="p-6">
                        <!-- Name & Title -->
                        <h3 class="text-lg font-bold text-gray-900 mb-2 break-words">
                            {{ $lecturer->title ? $lecturer->title . ' ' : '' }}{{ $lecturer->name }}
                        </h3>
                        
                        <!-- Academic Info -->
                        <div class="space-y-2 mb-4">
                            @if($lecturer->nip)
                            <div class="text-sm text-gray-600">
                                <span class="font-medium">NIP:</span> {{ $lecturer->nip }}
                            </div>
                            @endif
                            
                            @if($lecturer->nidn)
                            <div class="text-sm text-gray-600">
                                <span class="font-medium">NIDN:</span> {{ $lecturer->nidn }}
                            </div>
                            @endif
                            
                            <div class="text-sm text-gray-600">
                                <span class="font-medium">Email:</span> 
                                <a href="mailto:{{ $lecturer->email }}" class="text-blue-600 hover:underline break-all">{{ $lecturer->email }}</a>
                            </div>
                        </div>
                        
                        <!-- Expertise -->
                        <div class="mb-4">
                            <h4 class="text-sm font-semibold text-gray-900 mb-1">Bidang Keahlian</h4>
                            <p class="text-sm text-gray-600 break-words">{{ $lecturer->expertise }}</p>
                        </div>
                        
                        <!-- Academic Links -->
                        <div class="flex flex-wrap gap-2">
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
            
            <!-- Faculty Statistics -->
            <div class="mt-20 lg:mt-32">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-8 lg:p-12 shadow-2xl">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl lg:text-4xl font-black text-white mb-4">Tim Dosen Berkualitas</h2>
                        <p class="text-blue-100 text-lg font-medium">Statistik dosen Program Studi Ilmu Gizi</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM5 20a2 2 0 01-2-2v-1a5 5 0 0110 0v1a2 2 0 01-2 2H5z"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $staff->count() }}</div>
                            <div class="text-blue-200 font-medium">Total Dosen</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $staff->where('title', 'like', '%Dr.%')->count() }}</div>
                            <div class="text-blue-200 font-medium">Bergelar Doktor</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $staff->whereNotNull('sinta_url')->count() }}</div>
                            <div class="text-blue-200 font-medium">Terdaftar SINTA</div>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <div class="text-4xl font-black text-white mb-2">{{ $staff->whereNotNull('scholar_url')->count() }}</div>
                            <div class="text-blue-200 font-medium">Google Scholar</div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-20">
                <div class="bg-white rounded-3xl shadow-2xl p-12 max-w-lg mx-auto border-t-8 border-gray-300">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Belum Ada Data Dosen</h3>
                    <p class="text-gray-600 text-lg">Data profil dosen akan segera ditambahkan.</p>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection