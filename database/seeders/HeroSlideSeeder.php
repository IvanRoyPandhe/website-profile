<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlide;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'title' => 'Selamat Datang di Program Studi Ilmu Gizi',
                'subtitle' => 'Universitas Muhammadiyah Gresik',
                'description' => 'Bergabunglah dengan kami untuk menjadi ahli gizi profesional yang kompeten dalam bidang kesehatan dan nutrisi masyarakat.',
                'background_color' => '#3B82F6',
                'button_text' => 'Pelajari Lebih Lanjut',
                'button_url' => '/visi-misi',
                'sort_order' => 1,
            ],
            [
                'title' => 'Pendidikan Berkualitas',
                'subtitle' => 'Dengan Dosen Berpengalaman',
                'description' => 'Dapatkan pendidikan ilmu gizi terbaik dari dosen-dosen berpengalaman dan berkualitas internasional.',
                'background_color' => '#10B981',
                'button_text' => 'Lihat Profil Dosen',
                'button_url' => '/profile-dosen',
                'sort_order' => 2,
            ],
        ];

        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }
    }
}