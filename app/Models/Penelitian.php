<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    protected $fillable = [
        'tahun',
        'nomor',
        'judul_penelitian',
        'nama_ketua_tim',
        'kepakaran_ketua_tim',
        'nama_anggota_dosen',
        'nama_mahasiswa',
        'link_unduh',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByTahun($query, $tahun)
    {
        return $query->where('tahun', $tahun);
    }
}
