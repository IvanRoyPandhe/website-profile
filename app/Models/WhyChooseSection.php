<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseSection extends Model
{
    protected $fillable = [
        'badge_text',
        'title',
        'subtitle',
        'description',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
