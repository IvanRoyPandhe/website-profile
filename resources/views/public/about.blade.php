@extends('layouts.app')

@section('title', 'About Us - Nursing Study Program')

@section('content')
<!-- Page Header -->
<section class="bg-nursing-blue text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center fade-in">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
            <p class="text-xl">Learn about our history, vision, and mission</p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16">
    <div class="container mx-auto px-4">
        @if($page && $page->content)
            <div class="fade-in">
                {!! $page->content !!}
            </div>
        @endif
        
        <!-- Values Section -->
        <div class="mt-16 fade-in">
            <h2 class="text-3xl font-bold text-center text-nursing-blue mb-12">Our Core Values</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center hover-scale bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-nursing-blue mb-2">Compassion</h3>
                    <p class="text-gray-600 text-sm">Caring for patients with empathy and understanding</p>
                </div>
                
                <div class="text-center hover-scale bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-nursing-blue mb-2">Excellence</h3>
                    <p class="text-gray-600 text-sm">Striving for the highest standards in education and practice</p>
                </div>
                
                <div class="text-center hover-scale bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-nursing-blue mb-2">Integrity</h3>
                    <p class="text-gray-600 text-sm">Maintaining ethical standards and professional conduct</p>
                </div>
                
                <div class="text-center hover-scale bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-nursing-blue mb-2">Innovation</h3>
                    <p class="text-gray-600 text-sm">Embracing new technologies and evidence-based practices</p>
                </div>
            </div>
        </div>
        
        <!-- Statistics Section -->
        <div class="mt-16 fade-in">
            <div class="bg-gray-100 py-12 px-8 rounded-lg">
                <h2 class="text-3xl font-bold text-center text-nursing-blue mb-8">Our Achievements</h2>
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold text-nursing-blue mb-2">95%</div>
                        <div class="text-gray-600">NCLEX Pass Rate</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-nursing-blue mb-2">3000+</div>
                        <div class="text-gray-600">Graduates</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-nursing-blue mb-2">98%</div>
                        <div class="text-gray-600">Job Placement</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-nursing-blue mb-2">35+</div>
                        <div class="text-gray-600">Years of Excellence</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection