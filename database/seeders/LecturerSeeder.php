<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lecturer;

class LecturerSeeder extends Seeder
{
    public function run(): void
    {
        $lecturers = [
            [
                'name' => 'Dr. Nur Fauziyah, S.Pd., M.Pd.',
                'nip' => '04210605131',
                'nidn' => '0707037801',
                'email' => 'nurfauziyah@umg.ac.id',
                'expertise' => 'Gizi Klinik dan Dietetik',
                'sort_order' => 1,
            ],
            [
                'name' => 'Dr. Drs. Irwani Zawawi, M.Kes.',
                'nip' => '04219301021',
                'nidn' => '0002056501',
                'email' => 'irwanizawawi@umg.ac.id',
                'expertise' => 'Statistika dan Geometri Analitik',
                'sort_order' => 2,
            ],
            [
                'name' => 'Dr. Fatimatul Khikmiyah, S.Pd., M.Sc.',
                'nip' => '04211202152',
                'nidn' => '0708108102',
                'email' => 'fatim@umg.ac.id',
                'expertise' => 'Aljabar, Asesmen, dan Media Pembelajaran',
                'sort_order' => 3,
            ],
            [
                'name' => 'Dr. Sri Suryanti, S.Pd., M.Si.',
                'nidn' => '0713098501',
                'email' => 'srisuryanti@umg.ac.id',
                'expertise' => 'Aljabar dan Mutu Guru',
                'sort_order' => 4,
            ],
            [
                'name' => 'Dr. Drs. Sarwo Edy, M.Pd.',
                'nip' => '04219309022',
                'nidn' => '0024096705',
                'email' => 'sarwo@umg.ac.id',
                'expertise' => 'Manajemen Pendidikan',
                'sort_order' => 5,
            ],
            [
                'name' => 'Syaiful Huda, S.Pd., M.Si.',
                'nip' => '04211508185',
                'nidn' => '0727108602',
                'email' => 'syaifulhuda@umg.ac.id',
                'expertise' => 'Gizi Masyarakat dan Kesehatan Publik',
                'sort_order' => 6,
            ],
            [
                'name' => 'Churun Lu\'luil Maknun, S.Pd., M.Pd.',
                'nidn' => '0729069003',
                'email' => 'churunlm@umg.ac.id',
                'expertise' => 'Geometri',
                'sort_order' => 7,
            ],
        ];

        foreach ($lecturers as $lecturer) {
            Lecturer::create($lecturer);
        }
    }
}