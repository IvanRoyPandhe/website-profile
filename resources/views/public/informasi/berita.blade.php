@extends('layouts.app')

@section('title', 'Berita - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita & Artikel</h1>
        <p class="text-xl text-blue-100">Ikuti perkembangan terbaru Program Studi Ilmu Gizi</p>
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
        <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Berita Unggulan</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($featuredNews as $featured)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    @if($featured->featured_image)
                        <img src="{{ Storage::url($featured->featured_image) }}" 
                             alt="{{ $featured->title }}" 
                             class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
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