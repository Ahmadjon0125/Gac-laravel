<?php

namespace App\Filament\Resources\Tecno6s\Pages;

use App\Filament\Resources\Tecno6s\Tecno6Resource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTecno6 extends EditRecord
{
    protected static string $resource = Tecno6Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
