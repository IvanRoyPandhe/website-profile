<?php

namespace App\Filament\Resources\SurveyPenggunaResource\Pages;

use App\Filament\Resources\SurveyPenggunaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSurveyPenggunas extends ListRecords
{
    protected static string $resource = SurveyPenggunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
