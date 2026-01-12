<?php

namespace App\Filament\Resources\AboutFours\Pages;

use App\Filament\Resources\AboutFours\AboutFourResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutFours extends ListRecords
{
    protected static string $resource = AboutFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
