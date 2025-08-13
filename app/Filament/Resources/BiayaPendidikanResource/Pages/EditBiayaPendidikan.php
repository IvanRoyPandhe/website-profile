<?php

namespace App\Filament\Resources\BiayaPendidikanResource\Pages;

use App\Filament\Resources\BiayaPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiayaPendidikan extends EditRecord
{
    protected static string $resource = BiayaPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
