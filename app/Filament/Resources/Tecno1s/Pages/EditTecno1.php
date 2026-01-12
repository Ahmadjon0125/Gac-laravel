<?php

namespace App\Filament\Resources\Tecno1s\Pages;

use App\Filament\Resources\Tecno1s\Tecno1Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno1 extends EditRecord
{
    protected static string $resource = Tecno1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
