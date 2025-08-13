<?php

namespace App\Filament\Resources\PublikasiJurnalResource\Pages;

use App\Filament\Resources\PublikasiJurnalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublikasiJurnal extends EditRecord
{
    protected static string $resource = PublikasiJurnalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
