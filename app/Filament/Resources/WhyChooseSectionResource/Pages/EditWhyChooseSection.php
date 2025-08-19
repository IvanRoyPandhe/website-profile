<?php

namespace App\Filament\Resources\WhyChooseSectionResource\Pages;

use App\Filament\Resources\WhyChooseSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhyChooseSection extends EditRecord
{
    protected static string $resource = WhyChooseSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
