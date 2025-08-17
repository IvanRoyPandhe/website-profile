@extends('layouts.app')

@section('title', 'Berita - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Hero Section -->
<section class="py-16 md:py-20 bg-gradient-to-br from-blue-800 via-blue-700 to-blue-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #fbbf24 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="text-center">
            <div class="inline-flex items-center px-6 py-3 bg-yellow-400 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"/>
                </svg>
                BERITA & INFORMASI
            </div>
            <h1 class="text-4xl lg:text-6xl font-black text-white mb-6 leading-tight">
                Berita <span class="text-yellow-400">Terkini</span>
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto font-medium">
                Ikuti perkembangan terbaru Program Studi Ilmu Gizi
            </p>
        </div>
    </div>
</section>

<!-- Search & Filter -->
<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-6">
        <form method="GET" class="flex flex-col md:flex-row gap-4 items-center justify-between">
            <div class="flex-1 max-w-md">
                <input type="text" name="search" value="{{ request('search') }}" 
                       placeholder="Cari berita..." 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="flex gap-4">
                <select name="category" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Filter
                </button>
            </div>
        </form>
    </div>
</section>

@if($featuredNews->count() > 0)
<!-- Featured News -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 rounded-full text-sm font-bold mb-6 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                BERITA UNGGULAN
            </div>
            <h2 class="text-3xl lg:text-4xl font-black text-gray-900">Berita Unggulan</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($featuredNews as $featured)
                <article class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-4 border-t-8 border-yellow-500">
                    @if($featured->featured_image)
                        <img src="{{ Storage::url($featured->featured_image) }}" 
                             alt="{{ $featured->title }}" 
                             class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-yellow-400 text-blue-900 px-4 py-2 rounded-full text-sm font-bold">
                                {{ ucfirst($featured->category) }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                {{ $featured->published_at->format('d M Y') }}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">
                            <a href="{{ route('berita.detail', $featured->slug) }}" class="hover:text-blue-600 transition-colors">
                                {{ $featured->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($featured->excerpt, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">{{ $featured->views }} views</span>
                            <a href="{{ route('berita.detail', $featured->slug) }}" 
                               class="text-blue-600 hover:text-blue-700 font-semibold">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- All News -->
<section class="py-12">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-blue-600">
                @if(request('search'))
                    Hasil Pencarian "{{ request('search') }}"
                @elseif(request('category'))
                    Berita {{ ucfirst(request('category')) }}
                @else
                    Semua Berita
                @endif
            </h2>
            <span class="text-gray-600">{{ $news->total() }} artikel ditemukan</span>
        </div>

        @if($news->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $article)
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        @if($article->featured_image)
                            <img src="{{ Storage::url($article->featured_image) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                    {{ ucfirst($article->category) }}
                                </span>
                                <span class="text-gray-500 text-sm">
                                    {{ $article->published_at->format('d M Y') }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-gray-800">
                                <a href="{{ route('berita.detail', $article->slug) }}" class="hover:text-blue-600 transition-colors">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($article->excerpt, 100) }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span>{{ $article->views }} views</span>
                                    @if($article->author)
                                        <span>oleh {{ $article->author }}</span>
                                    @endif
                                </div>
                                <a href="{{ route('berita.detail', $article->slug) }}" 
                                   class="text-blue-600 hover:text-blue-700 font-semibold">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $news->appends(request()->query())->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📰</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak ada artikel ditemukan</h3>
                <p class="text-gray-500">Coba sesuaikan kriteria pencarian atau filter Anda.</p>
                <a href="{{ route('berita') }}" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Lihat Semua Berita
                </a>
            </div>
        @endif
    </div>
</section>
@endsection