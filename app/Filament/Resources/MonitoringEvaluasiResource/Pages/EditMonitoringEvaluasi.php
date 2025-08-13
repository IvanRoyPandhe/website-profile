<?php

namespace App\Filament\Resources\MonitoringEvaluasiResource\Pages;

use App\Filament\Resources\MonitoringEvaluasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMonitoringEvaluasi extends EditRecord
{
    protected static string $resource = MonitoringEvaluasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
