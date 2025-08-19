@extends('layouts.app')

@section('title', $news->title . ' - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4 sm:px-6">
        <nav class="text-xs sm:text-sm overflow-x-auto">
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700 whitespace-nowrap">Beranda</a>
            <span class="mx-1 sm:mx-2 text-gray-500">/</span>
            <a href="{{ route('berita') }}" class="text-blue-600 hover:text-blue-700 whitespace-nowrap">Berita</a>
            <span class="mx-1 sm:mx-2 text-gray-500">/</span>
            <span class="text-gray-600 truncate">{{ Str::limit($news->title, 30) }}</span>
        </nav>
    </div>
</section>

<!-- Article Content -->
<article class="py-6 sm:py-12">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Article Header -->
            <header class="mb-6 sm:mb-8">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 space-y-2 sm:space-y-0">
                    <span class="bg-blue-600 text-white px-3 sm:px-4 py-1 sm:py-2 rounded-full text-xs sm:text-sm font-semibold w-fit">
                        {{ ucfirst($news->category) }}
                    </span>
                    <div class="flex flex-wrap items-center gap-2 sm:space-x-4 text-gray-500 text-xs sm:text-sm">
                        <span class="whitespace-nowrap">{{ $news->published_at->format('d M Y') }}</span>
                        <span class="hidden sm:inline">•</span>
                        <span class="whitespace-nowrap">{{ $news->views }} views</span>
                        @if($news->author)
                            <span class="hidden sm:inline">•</span>
                            <span class="whitespace-nowrap">oleh {{ $news->author }}</span>
                        @endif
                    </div>
                </div>
                
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 leading-tight">
                    {{ $news->title }}
                </h1>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-600 leading-relaxed">
                    {{ $news->excerpt }}
                </p>
            </header>

            <!-- Featured Image -->
            @if($news->featured_image)
                <div class="mb-6 sm:mb-8">
                    <img src="{{ Storage::url($news->featured_image) }}" 
                         alt="{{ $news->title }}" 
                         class="w-full h-48 sm:h-64 md:h-80 lg:h-96 object-cover rounded-lg shadow-lg">
                </div>
            @endif

            <!-- Article Content -->
            <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none mb-6 sm:mb-8">
                {!! $news->content !!}
            </div>

            <!-- Gallery -->
            @if($news->gallery && count($news->gallery) > 0)
                <div class="mb-6 sm:mb-8">
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4">Galeri</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                        @foreach($news->gallery as $image)
                            <img src="{{ Storage::url($image) }}" 
                                 alt="Galeri gambar" 
                                 class="w-full h-40 sm:h-48 object-cover rounded-lg shadow hover:shadow-xl transition-all duration-300 cursor-pointer"
                                 onclick="openModal('{{ Storage::url($image) }}')">
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Tags -->
            @if($news->tags && count($news->tags) > 0)
                <div class="mb-8">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Tags:</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($news->tags as $tag)
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                #{{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Share Buttons -->
            <div class="border-t border-b border-gray-200 py-4 sm:py-6 mb-6 sm:mb-8">
                <h4 class="text-base sm:text-lg font-semibold text-gray-800 mb-3">Bagikan artikel ini:</h4>
                <div class="flex flex-wrap gap-2 sm:gap-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                       target="_blank" 
                       class="bg-blue-600 text-white px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm">
                        Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($news->title) }}" 
                       target="_blank" 
                       class="bg-blue-400 text-white px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors text-sm">
                        Twitter
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                       target="_blank" 
                       class="bg-blue-700 text-white px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors text-sm">
                        LinkedIn
                    </a>
                    <button onclick="copyToClipboard()" 
                            class="bg-gray-600 text-white px-3 sm:px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                        Salin Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related News -->
@if($relatedNews->count() > 0)
<section class="py-8 sm:py-12 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-6 sm:mb-8 text-blue-600">Artikel Terkait</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 max-w-6xl mx-auto">
            @foreach($relatedNews as $related)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    @if($related->featured_image)
                        <img src="{{ Storage::url($related->featured_image) }}" 
                             alt="{{ $related->title }}" 
                             class="w-full h-40 sm:h-48 object-cover">
                    @endif
                    <div class="p-4 sm:p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                {{ ucfirst($related->category) }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                {{ $related->published_at->format('d M Y') }}
                            </span>
                        </div>
                        <h3 class="text-base sm:text-lg font-bold mb-3 text-gray-800 line-clamp-2">
                            <a href="{{ route('berita.detail', $related->slug) }}" class="hover:text-blue-600 transition-colors">
                                {{ $related->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($related->excerpt, 80) }}</p>
                        <a href="{{ route('berita.detail', $related->slug) }}" 
                           class="text-blue-600 hover:text-blue-700 font-semibold text-sm">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center p-2 sm:p-4">
    <div class="relative max-w-full max-h-full">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full rounded-lg">
        <button onclick="closeModal()" 
                class="absolute top-2 right-2 sm:top-4 sm:right-4 text-white bg-black bg-opacity-50 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-opacity-75 text-lg sm:text-xl">
            ×
        </button>
    </div>
</div>

<script>
function openModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
}

function copyToClipboard() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        alert('Link berhasil disalin!');
    });
}

// Close modal when clicking outside the image
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>

<style>
.prose {
    color: #374151;
    line-height: 1.75;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.prose h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #2563eb;
    line-height: 1.3;
}

@media (min-width: 640px) {
    .prose h2 {
        font-size: 1.875rem;
    }
}

.prose h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
    color: #2563eb;
    line-height: 1.3;
}

@media (min-width: 640px) {
    .prose h3 {
        font-size: 1.5rem;
    }
}

.prose p {
    margin-bottom: 1.25rem;
    text-align: justify;
}

.prose ul, .prose ol {
    margin-bottom: 1.25rem;
    padding-left: 1.25rem;
}

@media (min-width: 640px) {
    .prose ul, .prose ol {
        padding-left: 1.5rem;
    }
}

.prose li {
    margin-bottom: 0.5rem;
}

.prose blockquote {
    border-left: 4px solid #2563eb;
    padding-left: 0.75rem;
    margin: 1.5rem 0;
    font-style: italic;
    color: #6b7280;
}

@media (min-width: 640px) {
    .prose blockquote {
        padding-left: 1rem;
    }
}

.prose img {
    border-radius: 0.5rem;
    margin: 1.5rem 0;
    width: 100%;
    height: auto;
}

.prose table {
    width: 100%;
    overflow-x: auto;
    display: block;
    white-space: nowrap;
}

@media (min-width: 640px) {
    .prose table {
        display: table;
        white-space: normal;
    }
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection