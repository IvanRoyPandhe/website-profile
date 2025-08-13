<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiMahasiswa extends Model
{
    protected $fillable = [
        'nama_mahasiswa',
        'prestasi',
        'waktu_pencapaian',
        'tingkat',
        'link_unduh',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
