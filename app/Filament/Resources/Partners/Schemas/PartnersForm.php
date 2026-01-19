<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('text_uz'),
                TextInput::make('text_en'),
                TextInput::make('text_ru'),
                FileUpload::make('icons')->image()->disk('public')->label('Partners')->multiple()
            ]);
    }
}
