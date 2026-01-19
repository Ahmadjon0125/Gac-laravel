<?php

namespace App\Filament\Resources\Infos\Pages;

use App\Filament\Resources\Infos\InfosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInfos extends EditRecord
{
    protected static string $resource = InfosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
