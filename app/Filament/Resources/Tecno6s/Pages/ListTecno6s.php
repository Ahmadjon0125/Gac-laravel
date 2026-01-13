<?php

namespace App\Filament\Resources\Tecno6s\Pages;

use App\Filament\Resources\Tecno6s\Tecno6Resource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTecno6s extends ListRecords
{
    protected static string $resource = Tecno6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
