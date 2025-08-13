<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublikasiJurnal extends Model
{
    protected $fillable = [
        'nama_jurnal',
        'deskripsi',
        'cover_image',
        'sort_order',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }
}
