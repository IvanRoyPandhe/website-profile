<?php

namespace App\Filament\Resources\KegiatanHimaResource\Pages;

use App\Filament\Resources\KegiatanHimaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanHimas extends ListRecords
{
    protected static string $resource = KegiatanHimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
