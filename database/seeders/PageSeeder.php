<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'home',
                'title' => 'Welcome to Nursing Study Program',
                'hero_title' => 'Excellence in Nursing Education',
                'hero_subtitle' => 'Preparing compassionate and skilled nurses for the future of healthcare',
                'content' => '<div class="container mx-auto px-4 py-8">
                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <div>
                            <h2 class="text-3xl font-bold text-blue-800 mb-4">About Our Program</h2>
                            <p class="text-gray-700 mb-4">Our Nursing Study Program is dedicated to preparing the next generation of healthcare professionals with the knowledge, skills, and compassion needed to excel in modern healthcare environments.</p>
                            <p class="text-gray-700">We offer a comprehensive curriculum that combines theoretical knowledge with hands-on clinical experience, ensuring our graduates are well-prepared for the challenges of nursing practice.</p>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-blue-800 mb-4">Why Choose Us?</h2>
                            <ul class="text-gray-700 space-y-2">
                                <li>• Experienced and dedicated faculty</li>
                                <li>• State-of-the-art simulation laboratories</li>
                                <li>• Strong clinical partnerships</li>
                                <li>• High NCLEX pass rates</li>
                                <li>• Excellent job placement rates</li>
                            </ul>
                        </div>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'about',
                'title' => 'About Us',
                'content' => '<div class="container mx-auto px-4 py-8">
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-blue-800 mb-6">Our History</h2>
                        <p class="text-gray-700 mb-4">Established in 1985, our Nursing Study Program has been at the forefront of nursing education for over three decades. We have graduated thousands of nurses who now serve in hospitals, clinics, and healthcare facilities worldwide.</p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-2xl font-bold text-blue-700 mb-4">Our Vision</h3>
                            <p class="text-gray-700">To be a leading institution in nursing education, recognized for excellence in preparing compassionate, competent, and ethical nurses who contribute to improving global health outcomes.</p>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-blue-700 mb-4">Our Mission</h3>
                            <p class="text-gray-700">To provide high-quality nursing education that integrates evidence-based practice, critical thinking, and compassionate care, preparing graduates to meet the evolving needs of diverse populations and healthcare systems.</p>
                        </div>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Us',
                'content' => '<div class="container mx-auto px-4 py-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-3xl font-bold text-blue-800 mb-6">Get in Touch</h2>
                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-semibold text-blue-700">Address</h3>
                                    <p class="text-gray-700">123 Healthcare Avenue<br>Medical District<br>City, State 12345</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-blue-700">Phone</h3>
                                    <p class="text-gray-700">(555) 123-4567</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-blue-700">Email</h3>
                                    <p class="text-gray-700">info@nursing.edu</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-blue-700">Office Hours</h3>
                                    <p class="text-gray-700">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-blue-800 mb-6">Send us a Message</h2>
                            <p class="text-gray-700 mb-4">Have questions about our program? We\'d love to hear from you!</p>
                        </div>
                    </div>
                </div>',
                'is_active' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
