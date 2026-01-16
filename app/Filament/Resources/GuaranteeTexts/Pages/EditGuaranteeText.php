<?php

namespace App\Filament\Resources\GuaranteeTexts\Pages;

use App\Filament\Resources\GuaranteeTexts\GuaranteeTextResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGuaranteeText extends EditRecord
{
    protected static string $resource = GuaranteeTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
