<?php

namespace App\Filament\Resources\SurveyPenggunaResource\Pages;

use App\Filament\Resources\SurveyPenggunaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSurveyPengguna extends EditRecord
{
    protected static string $resource = SurveyPenggunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
