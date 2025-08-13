<?php

namespace App\Filament\Resources\ProspekLulusanResource\Pages;

use App\Filament\Resources\ProspekLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProspekLulusan extends EditRecord
{
    protected static string $resource = ProspekLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
