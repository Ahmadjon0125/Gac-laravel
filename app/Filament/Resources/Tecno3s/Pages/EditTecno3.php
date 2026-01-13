<?php

namespace App\Filament\Resources\Tecno3s\Pages;

use App\Filament\Resources\Tecno3s\Tecno3Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno3 extends EditRecord
{
    protected static string $resource = Tecno3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
