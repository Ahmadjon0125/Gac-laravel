<?php

namespace App\Filament\Resources\AboutTwos\Pages;

use App\Filament\Resources\AboutTwos\AboutTwoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutTwos extends ListRecords
{
    protected static string $resource = AboutTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
