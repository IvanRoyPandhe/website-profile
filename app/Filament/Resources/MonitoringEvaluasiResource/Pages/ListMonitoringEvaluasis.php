<?php

namespace App\Filament\Resources\MonitoringEvaluasiResource\Pages;

use App\Filament\Resources\MonitoringEvaluasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMonitoringEvaluasis extends ListRecords
{
    protected static string $resource = MonitoringEvaluasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
