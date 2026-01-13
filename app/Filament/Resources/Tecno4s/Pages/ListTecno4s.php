<?php

namespace App\Filament\Resources\Tecno4s\Pages;

use App\Filament\Resources\Tecno4s\Tecno4Resource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTecno4s extends ListRecords
{
    protected static string $resource = Tecno4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
