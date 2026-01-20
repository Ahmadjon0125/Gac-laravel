<?php

namespace App\Filament\Resources\Offers\Pages;

use App\Filament\Resources\Offers\OffersResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOffers extends EditRecord
{
    protected static string $resource = OffersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
