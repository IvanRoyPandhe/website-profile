<?php

namespace App\Filament\Resources\RencanaTindakLanjutResource\Pages;

use App\Filament\Resources\RencanaTindakLanjutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRencanaTindakLanjut extends EditRecord
{
    protected static string $resource = RencanaTindakLanjutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
