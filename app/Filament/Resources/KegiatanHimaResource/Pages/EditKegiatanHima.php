<?php

namespace App\Filament\Resources\KegiatanHimaResource\Pages;

use App\Filament\Resources\KegiatanHimaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanHima extends EditRecord
{
    protected static string $resource = KegiatanHimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
