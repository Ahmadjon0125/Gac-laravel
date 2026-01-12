<?php

namespace App\Filament\Resources\AboutThrees\Pages;

use App\Filament\Resources\AboutThrees\AboutThreeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutThrees extends ListRecords
{
    protected static string $resource = AboutThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
