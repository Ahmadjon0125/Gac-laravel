<?php

namespace App\Filament\Resources\AboutOnes\Pages;

use App\Filament\Resources\AboutOnes\AboutOneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutOnes extends ListRecords
{
    protected static string $resource = AboutOneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
