<?php

namespace App\Filament\Resources\ProspekLulusanResource\Pages;

use App\Filament\Resources\ProspekLulusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProspekLulusans extends ListRecords
{
    protected static string $resource = ProspekLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
