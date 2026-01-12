<?php

namespace App\Filament\Resources\Tecno2s\Pages;

use App\Filament\Resources\Tecno2s\Tecno2Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno2 extends EditRecord
{
    protected static string $resource = Tecno2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
