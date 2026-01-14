<?php

namespace App\Filament\Resources\GuaranteeForms\Pages;

use App\Filament\Resources\GuaranteeForms\GuaranteeFormResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGuaranteeForm extends EditRecord
{
    protected static string $resource = GuaranteeFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
