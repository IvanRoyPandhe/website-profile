<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\Kontak;

class RecentActivitiesWidget extends Widget
{
    protected static string $view = 'filament.widgets.recent-activities';
    protected int | string | array $columnSpan = 'full';

    public function getRecentNews()
    {
        return Berita::orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }

    public function getRecentAgenda()
    {
        return Agenda::orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }

    public function getRecentMessages()
    {
        return Kontak::orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
    }
}