<?php

namespace App\Filament\Resources\KegiatanIkahimaResource\Pages;

use App\Filament\Resources\KegiatanIkahimaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanIkahimas extends ListRecords
{
    protected static string $resource = KegiatanIkahimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
