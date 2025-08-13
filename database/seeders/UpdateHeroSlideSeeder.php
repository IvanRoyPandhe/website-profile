<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlide;

class UpdateHeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::where('title', 'like', '%Matematika%')->update([
            'title' => 'Selamat Datang di Program Studi Ilmu Gizi',
            'description' => 'Bergabunglah dengan kami untuk menjadi ahli gizi profesional yang kompeten dalam bidang kesehatan dan nutrisi masyarakat.'
        ]);

        HeroSlide::where('description', 'like', '%matematika%')->update([
            'description' => 'Dapatkan pendidikan ilmu gizi terbaik dari dosen-dosen berpengalaman dan berkualitas internasional.'
        ]);
    }
}