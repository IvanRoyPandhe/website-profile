<?php

namespace App\Filament\Resources\KegiatanIkahimaResource\Pages;

use App\Filament\Resources\KegiatanIkahimaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanIkahima extends EditRecord
{
    protected static string $resource = KegiatanIkahimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
