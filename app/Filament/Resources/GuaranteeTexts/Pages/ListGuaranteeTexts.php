<?php

namespace App\Filament\Resources\GuaranteeTexts\Pages;

use App\Filament\Resources\GuaranteeTexts\GuaranteeTextResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGuaranteeTexts extends ListRecords
{
    protected static string $resource = GuaranteeTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
