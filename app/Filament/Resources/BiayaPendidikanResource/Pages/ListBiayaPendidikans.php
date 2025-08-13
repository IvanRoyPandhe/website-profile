<?php

namespace App\Filament\Resources\BiayaPendidikanResource\Pages;

use App\Filament\Resources\BiayaPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiayaPendidikans extends ListRecords
{
    protected static string $resource = BiayaPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
