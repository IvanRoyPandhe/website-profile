<?php

namespace App\Filament\Resources\KurikulumContentResource\Pages;

use App\Filament\Resources\KurikulumContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumContent extends EditRecord
{
    protected static string $resource = KurikulumContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
