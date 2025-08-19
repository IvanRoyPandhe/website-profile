<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeContent;

class HomeContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            // Hero Stats
            [
                'section' => 'hero_stats',
                'type' => 'stat',
                'title' => 'B',
                'subtitle' => 'Akreditasi',
                'description' => null,
                'icon' => null,
                'sort_order' => 1,
            ],
            [
                'section' => 'hero_stats',
                'type' => 'stat',
                'title' => '2030',
                'subtitle' => 'Target Visi',
                'description' => null,
                'icon' => null,
                'sort_order' => 2,
            ],
            [
                'section' => 'hero_stats',
                'type' => 'stat',
                'title' => 'S1',
                'subtitle' => 'Jenjang',
                'description' => null,
                'icon' => null,
                'sort_order' => 3,
            ],
            [
                'section' => 'hero_stats',
                'type' => 'stat',
                'title' => '100+',
                'subtitle' => 'Alumni',
                'description' => null,
                'icon' => null,
                'sort_order' => 4,
            ],

            // About Stats
            [
                'section' => 'about_stats',
                'type' => 'stat',
                'title' => 'Akreditasi',
                'subtitle' => 'Terakreditasi B',
                'description' => null,
                'icon' => null,
                'sort_order' => 1,
            ],
            [
                'section' => 'about_stats',
                'type' => 'stat',
                'title' => 'Target Visi',
                'subtitle' => 'Visi 2030',
                'description' => null,
                'icon' => null,
                'sort_order' => 2,
            ],
            [
                'section' => 'about_stats',
                'type' => 'stat',
                'title' => 'Jenjang',
                'subtitle' => 'Sarjana',
                'description' => null,
                'icon' => null,
                'sort_order' => 3,
            ],
            [
                'section' => 'about_stats',
                'type' => 'stat',
                'title' => 'Multi Karir',
                'subtitle' => 'Prospek Luas',
                'description' => null,
                'icon' => null,
                'sort_order' => 4,
            ],

            // About Features
            [
                'section' => 'about_features',
                'type' => 'feature',
                'title' => 'Laboratorium Gizi',
                'subtitle' => null,
                'description' => 'Fasilitas modern untuk analisis makanan dan gizi dengan peralatan terkini yang mendukung pembelajaran praktis.',
                'icon' => 'heroicon-o-beaker',
                'sort_order' => 1,
            ],
            [
                'section' => 'about_features',
                'type' => 'feature',
                'title' => 'Praktik Dietetik',
                'subtitle' => null,
                'description' => 'Pengalaman langsung konsultasi gizi dan diet dengan pendekatan kasus nyata di klinik gizi.',
                'icon' => 'heroicon-o-user-group',
                'sort_order' => 2,
            ],
            [
                'section' => 'about_features',
                'type' => 'feature',
                'title' => 'Food Service',
                'subtitle' => null,
                'description' => 'Manajemen penyediaan pangan dan kewirausahaan di bidang kuliner sehat dengan standar industri.',
                'icon' => 'heroicon-o-building-storefront',
                'sort_order' => 3,
            ],

            // Why Choose Us
            [
                'section' => 'why_choose',
                'type' => 'feature',
                'title' => 'Kurikulum Berkualitas',
                'subtitle' => null,
                'description' => 'Kurikulum sesuai standar nasional dan internasional dengan pendekatan kompetensi gizi terkini',
                'icon' => 'heroicon-o-book-open',
                'sort_order' => 1,
            ],
            [
                'section' => 'why_choose',
                'type' => 'feature',
                'title' => 'Penelitian Unggul',
                'subtitle' => null,
                'description' => 'Mengembangkan penelitian inovatif berbasis ilmu dan teknologi gizi untuk kesehatan masyarakat',
                'icon' => 'heroicon-o-beaker',
                'sort_order' => 2,
            ],
            [
                'section' => 'why_choose',
                'type' => 'feature',
                'title' => 'Pengabdian Masyarakat',
                'subtitle' => null,
                'description' => 'Program pengabdian kreatif dan berkelanjutan untuk meningkatkan kesehatan masyarakat',
                'icon' => 'heroicon-o-heart',
                'sort_order' => 3,
            ],

            // CTA Trust Indicators
            [
                'section' => 'cta_trust',
                'type' => 'stat',
                'title' => 'B',
                'subtitle' => 'Akreditasi',
                'description' => 'Terakreditasi',
                'icon' => null,
                'sort_order' => 1,
            ],
            [
                'section' => 'cta_trust',
                'type' => 'stat',
                'title' => '2030',
                'subtitle' => 'Target Visi',
                'description' => 'Visi Masa Depan',
                'icon' => null,
                'sort_order' => 2,
            ],
            [
                'section' => 'cta_trust',
                'type' => 'stat',
                'title' => '∞',
                'subtitle' => 'Prospek Karir',
                'description' => 'Peluang Luas',
                'icon' => null,
                'sort_order' => 3,
            ],
            [
                'section' => 'cta_trust',
                'type' => 'stat',
                'title' => 'S1',
                'subtitle' => 'Jenjang',
                'description' => 'Sarjana',
                'icon' => null,
                'sort_order' => 4,
            ],
        ];

        foreach ($contents as $content) {
            HomeContent::create($content);
        }
    }
}