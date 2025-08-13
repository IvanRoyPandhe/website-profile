@extends('layouts.app')

@section('title', 'Contact Us - Nursing Study Program')

@section('content')
<!-- Page Header -->
<section class="bg-nursing-blue text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center fade-in">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl">Get in touch with our admissions team</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-8 fade-in">
            {{ session('success') }}
        </div>
        @endif
        
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="fade-in">
                @if($page && $page->content)
                    {!! $page->content !!}
                @endif
                
                <!-- Map Placeholder -->
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-nursing-blue mb-4">Location</h3>
                    <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                        <div class="text-center text-gray-600">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p>Interactive Map</p>
                            <p class="text-sm">123 Healthcare Avenue, Medical District</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="fade-in">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-nursing-blue mb-6">Send us a Message</h3>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nursing-blue focus:border-transparent">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nursing-blue focus:border-transparent">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nursing-blue focus:border-transparent">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nursing-blue focus:border-transparent">
                                <option value="">Select a subject</option>
                                <option value="Admission Inquiry" {{ old('subject') == 'Admission Inquiry' ? 'selected' : '' }}>Admission Inquiry</option>
                                <option value="Program Information" {{ old('subject') == 'Program Information' ? 'selected' : '' }}>Program Information</option>
                                <option value="Financial Aid" {{ old('subject') == 'Financial Aid' ? 'selected' : '' }}>Financial Aid</option>
                                <option value="Campus Visit" {{ old('subject') == 'Campus Visit' ? 'selected' : '' }}>Campus Visit</option>
                                <option value="General Question" {{ old('subject') == 'General Question' ? 'selected' : '' }}>General Question</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nursing-blue focus:border-transparent"
                                      placeholder="Please provide details about your inquiry...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-nursing-blue text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
            <h2 class="text-3xl font-bold text-nursing-blue mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600">Quick answers to common questions</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-lg fade-in">
                <h3 class="font-bold text-nursing-blue mb-2">What are the admission requirements?</h3>
                <p class="text-gray-600">Admission requirements include a high school diploma or equivalent, prerequisite courses in science and mathematics, and a minimum GPA. Please contact our admissions office for detailed requirements.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg fade-in">
                <h3 class="font-bold text-nursing-blue mb-2">How long is the nursing program?</h3>
                <p class="text-gray-600">Our nursing program is a 4-semester program that can be completed in approximately 2 years of full-time study, including clinical rotations.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg fade-in">
                <h3 class="font-bold text-nursing-blue mb-2">Are clinical placements guaranteed?</h3>
                <p class="text-gray-600">Yes, we have partnerships with leading healthcare facilities in the region to ensure all students receive quality clinical experiences as part of their education.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg fade-in">
                <h3 class="font-bold text-nursing-blue mb-2">What is the NCLEX pass rate?</h3>
                <p class="text-gray-600">Our program maintains a 95% NCLEX-RN pass rate, well above the national average. We provide comprehensive NCLEX preparation throughout the curriculum.</p>
            </div>
        </div>
    </div>
</section>
@endsection