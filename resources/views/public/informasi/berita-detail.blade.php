@extends('layouts.app')

@section('title', $news->title . ' - Program Studi Ilmu Gizi UM Gresik')

@section('content')
<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-6">
        <nav class="text-sm">
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700">Beranda</a>
            <span class="mx-2 text-gray-500">/</span>
            <a href="{{ route('berita') }}" class="text-blue-600 hover:text-blue-700">Berita</a>
            <span class="mx-2 text-gray-500">/</span>
            <span class="text-gray-600">{{ $news->title }}</span>
        </nav>
    </div>
</section>

<!-- Article Content -->
<article class="py-12">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Article Header -->
            <header class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold">
                        {{ ucfirst($news->category) }}
                    </span>
                    <div class="flex items-center space-x-4 text-gray-500 text-sm">
                        <span>{{ $news->published_at->format('d F Y') }}</span>
                        <span>•</span>
                        <span>{{ $news->views }} views</span>
                        @if($news->author)
                            <span>•</span>
                            <span>oleh {{ $news->author }}</span>
                        @endif
                    </div>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    {{ $news->title }}
                </h1>
                
                <p class="text-xl text-gray-600 leading-relaxed">
                    {{ $news->excerpt }}
                </p>
            </header>

            <!-- Featured Image -->
            @if($news->featured_image)
                <div class="mb-8">
                    <img src="{{ Storage::url($news->featured_image) }}" 
                         alt="{{ $news->title }}" 
                         class="w-full rounded-lg shadow-lg">
                </div>
            @endif

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none mb-8">
                {!! $news->content !!}
            </div>

            <!-- Gallery -->
            @if($news->gallery && count($news->gallery) > 0)
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Galeri</h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($news->gallery as $image)
                            <img src="{{ Storage::url($image) }}" 
                                 alt="Galeri gambar" 
                                 class="w-full h-48 object-cover rounded-lg shadow hover:shadow-xl transition-all duration-300 cursor-pointer"
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
            <div class="border-t border-b border-gray-200 py-6 mb-8">
                <h4 class="text-lg font-semibold text-gray-800 mb-3">Bagikan artikel ini:</h4>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                       target="_blank" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($news->title) }}" 
                       target="_blank" 
                       class="bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors">
                        Twitter
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                       target="_blank" 
                       class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors">
                        LinkedIn
                    </a>
                    <button onclick="copyToClipboard()" 
                            class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                        Salin Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related News -->
@if($relatedNews->count() > 0)
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Artikel Terkait</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach($relatedNews as $related)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    @if($related->featured_image)
                        <img src="{{ Storage::url($related->featured_image) }}" 
                             alt="{{ $related->title }}" 
                             class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                {{ ucfirst($related->category) }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                {{ $related->published_at->format('d M Y') }}
                            </span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800">
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
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full rounded-lg">
        <button onclick="closeModal()" 
                class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-75">
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
}

.prose h2 {
    font-size: 1.875rem;
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #2563eb;
}

.prose h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
    color: #2563eb;
}

.prose p {
    margin-bottom: 1.25rem;
}

.prose ul, .prose ol {
    margin-bottom: 1.25rem;
    padding-left: 1.5rem;
}

.prose li {
    margin-bottom: 0.5rem;
}

.prose blockquote {
    border-left: 4px solid #2563eb;
    padding-left: 1rem;
    margin: 1.5rem 0;
    font-style: italic;
    color: #6b7280;
}

.prose img {
    border-radius: 0.5rem;
    margin: 1.5rem 0;
}
</style>
@endsection