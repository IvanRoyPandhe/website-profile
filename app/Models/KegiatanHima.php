<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanHima extends Model
{
    protected $fillable = [
        'periode',
        'title',
        'description',
        'image',
        'nama_kegiatan',
        'link_laporan',
        'link_dokumentasi',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByPeriode($query, $periode)
    {
        return $query->where('periode', $periode);
    }
}
