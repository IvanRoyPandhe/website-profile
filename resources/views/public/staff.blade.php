@extends('layouts.app')

@section('title', 'Academic Staff - Nursing Study Program')

@section('content')
<!-- Page Header -->
<section class="bg-nursing-blue text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center fade-in">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Academic Staff</h1>
            <p class="text-xl">Meet our experienced and dedicated faculty members</p>
        </div>
    </div>
</section>

<!-- Staff Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($staff as $member)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale fade-in">
                <div class="h-80 bg-gray-200 flex items-center justify-center">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-24 h-24 bg-nursing-blue rounded-full flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">{{ substr($member->name, 0, 1) }}</span>
                        </div>
                    @endif
                </div>
                
                <div class="p-4">
                    <h3 class="text-lg font-bold text-nursing-blue mb-1">{{ $member->name }}</h3>
                    <p class="text-nursing-light-blue font-semibold mb-2 text-sm">{{ $member->title }}</p>
                    <p class="text-gray-600 mb-3 text-xs">{{ Str::limit($member->expertise, 80) }}</p>
                    
                    @if($member->email)
                    <div class="flex items-center mb-3 text-xs text-gray-600">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:{{ $member->email }}" class="hover:text-nursing-blue truncate">{{ $member->email }}</a>
                    </div>
                    @endif
                    
                    <div class="flex gap-2">
                        @if($member->scopus_url)
                        <a href="{{ $member->scopus_url }}" target="_blank" class="bg-orange-500 text-white px-2 py-1 rounded text-xs hover:bg-orange-600 transition-colors">
                            Scopus
                        </a>
                        @endif
                        
                        @if($member->scholar_url)
                        <a href="{{ $member->scholar_url }}" target="_blank" class="bg-blue-500 text-white px-2 py-1 rounded text-xs hover:bg-blue-600 transition-colors">
                            Scholar
                        </a>
                        @endif
                        
                        @if($member->sinta_url)
                        <a href="{{ $member->sinta_url }}" target="_blank" class="bg-green-500 text-white px-2 py-1 rounded text-xs hover:bg-green-600 transition-colors">
                            Sinta
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($staff->isEmpty())
        <div class="text-center py-12">
            <div class="text-gray-500 text-lg">No staff members found.</div>
        </div>
        @endif
    </div>
</section>

<!-- Join Our Team Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="fade-in">
            <h2 class="text-3xl font-bold text-nursing-blue mb-4">Join Our Team</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                We're always looking for passionate educators and healthcare professionals to join our faculty. 
                If you're interested in shaping the future of nursing education, we'd love to hear from you.
            </p>
            <a href="{{ route('contact') }}" class="bg-nursing-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                Contact Us About Opportunities
            </a>
        </div>
    </div>
</section>
@endsection