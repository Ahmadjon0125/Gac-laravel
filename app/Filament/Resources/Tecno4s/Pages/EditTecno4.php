<?php

namespace App\Filament\Resources\Tecno4s\Pages;

use App\Filament\Resources\Tecno4s\Tecno4Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno4 extends EditRecord
{
    protected static string $resource = Tecno4Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
