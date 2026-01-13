<?php

namespace App\Filament\Resources\Guarantees\Pages;

use App\Filament\Resources\Guarantees\GuaranteeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGuarantee extends EditRecord
{
    protected static string $resource = GuaranteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
