<?php

namespace App\Filament\Resources\Advantages\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdvantagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_uz')->required(),
                TextInput::make('title_ru')->required(),
                TextInput::make('title_en')->required(),
                TinyEditor::make('text_uz')->columnSpanFull()->required(),
                TinyEditor::make('text_ru')->columnSpanFull()->required(),
                TinyEditor::make('text_en')->columnSpanFull()->required(),
                FileUpload::make('image')->image()->required()->disk('public')->downloadable()->label('Image'),
            ]);
    }
}
