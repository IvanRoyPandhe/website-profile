<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProspekLulusan extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'category',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
