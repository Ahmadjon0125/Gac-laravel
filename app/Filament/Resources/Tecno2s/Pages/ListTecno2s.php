<?php

namespace App\Filament\Resources\Tecno2s\Pages;

use App\Filament\Resources\Tecno2s\Tecno2Resource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTecno2s extends ListRecords
{
    protected static string $resource = Tecno2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
