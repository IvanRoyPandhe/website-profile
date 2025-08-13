<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kebijakan;

class KebijakanSeeder extends Seeder
{
    public function run(): void
    {
        $kebijakan = [
            // VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)
            [
                'cluster' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                'sub_cluster' => null,
                'nomor' => 1,
                'nama_dokumen' => 'Undang – Undang Republik Indonesia Nomor 12 Tahun 2012 tentang Pendidikan Tinggi (Lembaran Negara Republik Indonesia Tahun 2012 Nomor 158, Tambahan Lembaran Negara Republik Indonesia Nomor 5336)',
                'link_download' => 'https://drive.google.com/file/d/sample1',
            ],
            [
                'cluster' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                'sub_cluster' => null,
                'nomor' => 2,
                'nama_dokumen' => 'Undang – Undang Republik Indonesia Nomor 14 Tahun 2005 tentang Guru dan Dosen (Lembaran Negara Republik Indonesia Tahun 2005 Nomor 157, Tambahan Lembaran Negara Republik Indonesia Nomor 4586)',
                'link_download' => 'https://drive.google.com/file/d/sample2',
            ],
        ];

        foreach ($kebijakan as $item) {
            Kebijakan::create($item);
        }
    }
}
