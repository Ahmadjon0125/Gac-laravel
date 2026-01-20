<?php

namespace App\Filament\Resources\Offers\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OffersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_uz')->required(),
                TextInput::make('title_ru')->required(),
                TextInput::make('title_en')->required(),
                TinyEditor::make('text_uz')->required()->columnSpanFull(),
                TinyEditor::make('text_ru')->required()->columnSpanFull(),
                TinyEditor::make('text_en')->required()->columnSpanFull(),
            ]);
    }
}
