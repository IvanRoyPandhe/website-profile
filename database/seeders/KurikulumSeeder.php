<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kurikulum;

class KurikulumSeeder extends Seeder
{
    public function run(): void
    {
        $kurikulum = [
            // Semester 1
            ['kode_mk' => 'MAT101', 'nama_mk' => 'Kalkulus I', 'sks' => 3, 'semester' => 1, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT102', 'nama_mk' => 'Aljabar Linear I', 'sks' => 3, 'semester' => 1, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT103', 'nama_mk' => 'Geometri Analitik', 'sks' => 3, 'semester' => 1, 'jenis' => 'wajib'],
            
            // Semester 2
            ['kode_mk' => 'MAT201', 'nama_mk' => 'Kalkulus II', 'sks' => 3, 'semester' => 2, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT202', 'nama_mk' => 'Aljabar Linear II', 'sks' => 3, 'semester' => 2, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT203', 'nama_mk' => 'Statistika Dasar', 'sks' => 3, 'semester' => 2, 'jenis' => 'wajib'],
            
            // Semester 3
            ['kode_mk' => 'MAT301', 'nama_mk' => 'Kalkulus III', 'sks' => 3, 'semester' => 3, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT302', 'nama_mk' => 'Persamaan Diferensial', 'sks' => 3, 'semester' => 3, 'jenis' => 'wajib'],
            ['kode_mk' => 'MAT303', 'nama_mk' => 'Metode Numerik', 'sks' => 3, 'semester' => 3, 'jenis' => 'wajib'],
        ];

        foreach ($kurikulum as $mk) {
            Kurikulum::create($mk);
        }
    }
}