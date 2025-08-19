<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'title' => 'Program Studi',
            'subtitle' => 'Ilmu Gizi',
            'description' => 'Mencetak nutrisionis profesional yang kompeten dalam pelayanan gizi masyarakat, klinik dietetik, dan manajemen penyediaan pangan dengan pendekatan Islam yang rahmatan lil alamiin.',
            'is_active' => true,
        ]);
    }
}