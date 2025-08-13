<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            LecturerSeeder::class,
            KurikulumSeeder::class,
            // BeritaSeeder::class, // Skip karena sudah ada data
        ]);
    }
}