<?php

namespace App\Filament\Resources\GuaranteeForms\Pages;

use App\Filament\Resources\GuaranteeForms\GuaranteeFormResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGuaranteeForms extends ListRecords
{
    protected static string $resource = GuaranteeFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
