<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kebijakan;

class KebijakanLengkapSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        Kebijakan::truncate();

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
            [
                'cluster' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                'sub_cluster' => null,
                'nomor' => 3,
                'nama_dokumen' => 'Undang – Undang Republik Indonesia Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional',
                'link_download' => 'https://drive.google.com/file/d/sample3',
            ],
            [
                'cluster' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                'sub_cluster' => null,
                'nomor' => 4,
                'nama_dokumen' => 'Peraturan Pemerintah Nomor 4 Tahun 2014, tentang Penyelenggaraan Pendidikan Tinggi dan Pengelolaan Perguruan Tinggi',
                'link_download' => 'https://drive.google.com/file/d/sample4',
            ],
            [
                'cluster' => 'VISI, MISI, TUJUAN, DAN STRATEGI (VMTS)',
                'sub_cluster' => null,
                'nomor' => 5,
                'nama_dokumen' => 'Peraturan Pemerintah Nomor 57 Tahun 2021 tentang Standar Nasional Pendidikan (Lembaran Negara Republik Indonesia Tahun 2021 Nomor 87, Tambahan Lembaran Negara Republik Indonesia Nomor 6676) sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 4 Tahun 2022 tentang Perubahan atas Peraturan Pemerintah Nomor 57 Tahun 2021 tentang Standar Nasional Pendidikan (Lembaran Negara Republik Indonesia Tahun 2022 Nomor 14, Tambahan Lembaran Negara Republik Indonesia Nomor 6762)',
                'link_download' => 'https://drive.google.com/file/d/sample5',
            ],

            // TATA PAMONG, TATA KELOLA, DAN KERJA SAMA - Tata Pamong, Tata Kelola, dan Kepemimpinan
            [
                'cluster' => 'TATA PAMONG, TATA KELOLA, DAN KERJA SAMA',
                'sub_cluster' => 'Tata Pamong, Tata Kelola, dan Kepemimpinan',
                'nomor' => 1,
                'nama_dokumen' => 'Permendikbud Nomor 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi',
                'link_download' => 'https://drive.google.com/file/d/sample6',
            ],
            [
                'cluster' => 'TATA PAMONG, TATA KELOLA, DAN KERJA SAMA',
                'sub_cluster' => 'Tata Pamong, Tata Kelola, dan Kepemimpinan',
                'nomor' => 2,
                'nama_dokumen' => 'Pedoman Pimpinan Pusat Muhammadiyah Nomor: 02/PED/I.0/B/2012 tentang Perguruan Tinggi Muhammadiyah pasal 3 tentang tujuan perguruan tinggi muhammadiyah, pasal 9 tentang kurikulum, bab 7 unsur pimpinan, pasal 22 tentang prosedur pengangkatan unsur pimpinan lain, bab 9 tentang dosen dan tenaga kependidikan, bab 10 mahasiswa, organisasi, dan alumni',
                'link_download' => 'https://drive.google.com/file/d/sample7',
            ],

            // MAHASISWA - Rekrutmen dan Tes Seleksi Mahasiswa Baru
            [
                'cluster' => 'MAHASISWA',
                'sub_cluster' => 'Rekrutmen dan Tes Seleksi Mahasiswa Baru',
                'nomor' => 1,
                'nama_dokumen' => 'Undang – undang RI 1945 pasal 31, tentang Warga Negara Berhak dan Wajib mengikuti Pendidikan',
                'link_download' => 'https://drive.google.com/file/d/sample8',
            ],
            [
                'cluster' => 'MAHASISWA',
                'sub_cluster' => 'Rekrutmen dan Tes Seleksi Mahasiswa Baru',
                'nomor' => 2,
                'nama_dokumen' => 'UU No 20 Tahun 2003, Pasal 24 ayat (4) tentang penyelenggaraan Pendidikan Tinggi',
                'link_download' => 'https://drive.google.com/file/d/sample9',
            ],

            // SUMBER DAYA MANUSIA - Dosen
            [
                'cluster' => 'SUMBER DAYA MANUSIA',
                'sub_cluster' => 'Dosen',
                'nomor' => 1,
                'nama_dokumen' => 'Undang-Undang No. 14 Tahun 2005 tentang Guru Dan Dosen',
                'link_download' => 'https://drive.google.com/file/d/sample10',
            ],
            [
                'cluster' => 'SUMBER DAYA MANUSIA',
                'sub_cluster' => 'Dosen',
                'nomor' => 2,
                'nama_dokumen' => 'Peraturan Pemerintah Nomor 37 Tahun 2009 Tentang Dosen',
                'link_download' => 'https://drive.google.com/file/d/sample11',
            ],

            // PENELITIAN
            [
                'cluster' => 'PENELITIAN',
                'sub_cluster' => null,
                'nomor' => 1,
                'nama_dokumen' => 'Peraturan Presiden No.38 Tahun 2018 Tentang Rencana Induk Riset Nasional 2017 – 2045',
                'link_download' => 'https://drive.google.com/file/d/sample12',
            ],
            [
                'cluster' => 'PENELITIAN',
                'sub_cluster' => null,
                'nomor' => 2,
                'nama_dokumen' => 'Permendikbud Republik Indonesia No. 3 Tahun 2020 Tentang Standar Nasional Pendidikan Tinggi',
                'link_download' => 'https://drive.google.com/file/d/sample13',
            ],

            // PENGABDIAN KEPADA MASYARAKAT
            [
                'cluster' => 'PENGABDIAN KEPADA MASYARAKAT',
                'sub_cluster' => null,
                'nomor' => 1,
                'nama_dokumen' => 'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi',
                'link_download' => 'https://drive.google.com/file/d/sample14',
            ],
            [
                'cluster' => 'PENGABDIAN KEPADA MASYARAKAT',
                'sub_cluster' => null,
                'nomor' => 2,
                'nama_dokumen' => 'Statuta Universitas Muhammadiyah Gresik tahun 2019',
                'link_download' => 'https://drive.google.com/file/d/sample15',
            ],
        ];

        foreach ($kebijakan as $item) {
            Kebijakan::create($item);
        }
    }
}