<?php

namespace App\Filament\Resources\AboutFours\Pages;

use App\Filament\Resources\AboutFours\AboutFourResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutFour extends EditRecord
{
    protected static string $resource = AboutFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
