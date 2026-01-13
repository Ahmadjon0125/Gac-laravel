<?php

namespace App\Filament\Resources\Tecno5s\Pages;

use App\Filament\Resources\Tecno5s\Tecno5Resource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTecno5s extends ListRecords
{
    protected static string $resource = Tecno5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
