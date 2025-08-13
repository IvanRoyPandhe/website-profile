<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $berita = [
            [
                'title' => 'Penerimaan Mahasiswa Baru Tahun Akademik 2024/2025',
                'slug' => 'penerimaan-mahasiswa-baru-2024-2025',
                'excerpt' => 'Program Studi Ilmu Gizi UM Gresik membuka pendaftaran mahasiswa baru untuk tahun akademik 2024/2025.',
                'content' => '<p>Program Studi Ilmu Gizi Universitas Muhammadiyah Gresik dengan bangga mengumumkan pembukaan pendaftaran mahasiswa baru untuk tahun akademik 2024/2025.</p><p>Pendaftaran dibuka mulai tanggal 1 Januari hingga 30 Juni 2024.</p>',
                'category' => 'announcements',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Seminar Nasional Gizi dan Kesehatan Masyarakat',
                'slug' => 'seminar-nasional-gizi-kesehatan',
                'excerpt' => 'Program Studi Ilmu Gizi menyelenggarakan seminar nasional dengan tema "Gizi untuk Kesehatan Masyarakat Indonesia".',
                'content' => '<p>Seminar nasional ini akan menghadirkan pembicara dari berbagai universitas terkemuka di Indonesia.</p>',
                'category' => 'events',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(5),
            ],
        ];

        foreach ($berita as $item) {
            Berita::create($item);
        }
    }
}