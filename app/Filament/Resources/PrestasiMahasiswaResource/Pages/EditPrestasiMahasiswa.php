<?php

namespace App\Filament\Resources\PrestasiMahasiswaResource\Pages;

use App\Filament\Resources\PrestasiMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrestasiMahasiswa extends EditRecord
{
    protected static string $resource = PrestasiMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
