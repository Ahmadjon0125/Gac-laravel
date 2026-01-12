<?php

namespace App\Filament\Resources\AboutTwos\Pages;

use App\Filament\Resources\AboutTwos\AboutTwoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutTwo extends EditRecord
{
    protected static string $resource = AboutTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
