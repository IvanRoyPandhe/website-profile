<?php

namespace App\Filament\Resources\WhyChooseSectionResource\Pages;

use App\Filament\Resources\WhyChooseSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhyChooseSections extends ListRecords
{
    protected static string $resource = WhyChooseSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
