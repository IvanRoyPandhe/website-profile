<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyPengguna extends Model
{
    protected $fillable = [
        'title',
        'description',
        'survey_link',
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
