<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\Kontak;

class DashboardStatsWidget extends BaseStatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Berita::count())
                ->description('Artikel berita yang dipublikasikan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary'),
            Stat::make('Total Agenda', Agenda::count())
                ->description('Kegiatan yang dijadwalkan')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('warning'),
            Stat::make('Pesan Kontak', Kontak::count())
                ->description('Pesan dari pengunjung')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),
            Stat::make('Total Users', \App\Models\User::count())
                ->description('Pengguna sistem')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),
        ];
    }
}