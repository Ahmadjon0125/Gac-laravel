<?php

namespace App\Filament\Resources\AboutOnes\Pages;

use App\Filament\Resources\AboutOnes\AboutOneResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutOne extends EditRecord
{
    protected static string $resource = AboutOneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
