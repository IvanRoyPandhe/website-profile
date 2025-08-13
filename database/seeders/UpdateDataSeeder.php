<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecturer;
use App\Models\Berita;

class UpdateDataSeeder extends Seeder
{
    public function run(): void
    {
        // Update lecturer expertise
        Lecturer::where('expertise', 'like', '%Matematika%')->update([
            'expertise' => 'Gizi Klinik dan Dietetik'
        ]);

        // Update berita content
        Berita::where('excerpt', 'like', '%Matematika%')->update([
            'excerpt' => 'Program Studi Ilmu Gizi UM Gresik membuka pendaftaran mahasiswa baru untuk tahun akademik 2024/2025.',
            'content' => '<p>Program Studi Ilmu Gizi Universitas Muhammadiyah Gresik dengan bangga mengumumkan pembukaan pendaftaran mahasiswa baru untuk tahun akademik 2024/2025.</p><p>Pendaftaran dibuka mulai tanggal 1 Januari hingga 30 Juni 2024.</p>'
        ]);

        Berita::where('title', 'like', '%Matematika%')->update([
            'title' => 'Seminar Nasional Gizi dan Kesehatan Masyarakat',
            'slug' => 'seminar-nasional-gizi-kesehatan',
            'excerpt' => 'Program Studi Ilmu Gizi menyelenggarakan seminar nasional dengan tema "Gizi untuk Kesehatan Masyarakat Indonesia".'
        ]);
    }
}