<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WhyChooseSection;

class WhyChooseSectionSeeder extends Seeder
{
    public function run(): void
    {
        WhyChooseSection::create([
            'badge_text' => 'KEUNGGULAN PROGRAM STUDI',
            'title' => 'Mengapa Memilih',
            'subtitle' => 'Program Gizi UMG?',
            'description' => 'Menjadi nutrisionis yang mandiri, kreatif, dan profesional dengan keunggulan kompetitif di era global',
            'is_active' => true,
        ]);
    }
}