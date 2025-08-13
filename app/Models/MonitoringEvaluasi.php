<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitoringEvaluasi extends Model
{
    protected $fillable = [
        'cluster',
        'sub_cluster',
        'periode',
        'link_download',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCluster($query, $cluster)
    {
        return $query->where('cluster', $cluster);
    }
}
