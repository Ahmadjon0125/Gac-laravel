<?php

namespace App\Filament\Resources\AboutThrees\Pages;

use App\Filament\Resources\AboutThrees\AboutThreeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutThree extends EditRecord
{
    protected static string $resource = AboutThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
