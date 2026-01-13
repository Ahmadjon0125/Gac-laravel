<?php

namespace App\Filament\Resources\Tecno3s\Pages;

use App\Filament\Resources\Tecno3s\Tecno3Resource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTecno3s extends ListRecords
{
    protected static string $resource = Tecno3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
