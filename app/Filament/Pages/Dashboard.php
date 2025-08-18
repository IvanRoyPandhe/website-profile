<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\StatsOverviewWidget as BaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.admin.dashboard';

    public function getWidgets(): array
    {
        return [
            DashboardStatsWidget::class,
        ];
    }
}

class DashboardStatsWidget extends BaseStatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', '25')
                ->description('Artikel berita aktif')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            
            Stat::make('Total Dosen', '15')
                ->description('Dosen aktif')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('warning')
                ->chart([2, 4, 3, 7, 5, 8, 6]),
            
            Stat::make('Prestasi Mahasiswa', '42')
                ->description('Prestasi tercatat')
                ->descriptionIcon('heroicon-m-trophy')
                ->color('success')
                ->chart([10, 15, 8, 20, 12, 18, 25]),
        ];
    }
}