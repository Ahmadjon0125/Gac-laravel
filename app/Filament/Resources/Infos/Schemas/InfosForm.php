<?php

namespace App\Filament\Resources\Infos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InfosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')->tel(),
                TextInput::make('mail')->email(),
                TextInput::make('address'),
                TextInput::make('point'),
                TextInput::make('map'),
            ]);
    }
}
