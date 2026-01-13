<?php

namespace App\Filament\Resources\Tecno5s\Pages;

use App\Filament\Resources\Tecno5s\Tecno5Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno5 extends EditRecord
{
    protected static string $resource = Tecno5Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
