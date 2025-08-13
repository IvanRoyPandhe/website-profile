@extends('layouts.app')

@section('title', 'Curriculum - Nursing Study Program')

@section('content')
<!-- Page Header -->
<section class="bg-nursing-blue text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center fade-in">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Curriculum</h1>
            <p class="text-xl">Comprehensive nursing education program structure</p>
        </div>
    </div>
</section>

<!-- Curriculum Overview -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
            <h2 class="text-3xl font-bold text-nursing-blue mb-4">Program Overview</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Our comprehensive nursing curriculum is designed to provide students with the theoretical knowledge 
                and practical skills needed to excel in modern healthcare environments. The program combines 
                classroom instruction with hands-on clinical experience.
            </p>
        </div>
        
        <!-- Curriculum by Semester -->
        @foreach($curriculumItems as $semester => $courses)
        <div class="mb-12 fade-in">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-nursing-blue text-white px-6 py-4">
                    <h3 class="text-2xl font-bold">{{ $semester }}</h3>
                    <p class="text-blue-200">{{ $courses->count() }} courses • {{ $courses->sum('credits') }} total credits</p>
                </div>
                
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($courses as $course)
                        <div class="border border-gray-200 rounded-lg p-4 hover-scale">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-nursing-blue">{{ $course->course_code }}</h4>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $course->credits }} credits</span>
                            </div>
                            <h5 class="font-semibold text-gray-800 mb-2">{{ $course->course_name }}</h5>
                            <p class="text-gray-600 text-sm">{{ $course->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        @if($curriculumItems->isEmpty())
        <div class="text-center py-12">
            <div class="text-gray-500 text-lg">No curriculum items found.</div>
        </div>
        @endif
    </div>
</section>

<!-- Program Highlights -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
            <h2 class="text-3xl font-bold text-nursing-blue mb-4">Program Highlights</h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">Simulation Labs</h3>
                <p class="text-gray-600">State-of-the-art simulation laboratories for realistic clinical training experiences.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">Clinical Rotations</h3>
                <p class="text-gray-600">Extensive clinical rotations in top healthcare facilities for real-world experience.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">NCLEX Preparation</h3>
                <p class="text-gray-600">Comprehensive NCLEX-RN preparation integrated throughout the curriculum.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">Evidence-Based Practice</h3>
                <p class="text-gray-600">Focus on current research and evidence-based nursing practices.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">Interprofessional Education</h3>
                <p class="text-gray-600">Collaborative learning with other healthcare disciplines.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg text-center hover-scale fade-in">
                <div class="w-16 h-16 bg-nursing-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-nursing-blue mb-3">Career Support</h3>
                <p class="text-gray-600">Comprehensive career counseling and job placement assistance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="fade-in">
            <h2 class="text-3xl font-bold text-nursing-blue mb-4">Ready to Begin Your Journey?</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Our comprehensive curriculum will prepare you for a successful career in nursing. 
                Contact us to learn more about admission requirements and application procedures.
            </p>
            <a href="{{ route('contact') }}" class="bg-nursing-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                Apply Now
            </a>
        </div>
    </div>
</section>
@endsection