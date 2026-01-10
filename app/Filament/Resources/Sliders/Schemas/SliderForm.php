<?php

namespace App\Filament\Resources\Sliders\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('bgImage')->disk('public')->image()->downloadable()->required(),
                TextInput::make('title_uz')->required(),
                TextInput::make('title_ru')->required(),
                TextInput::make('title_en')->required(),
                TinyEditor::make('text_uz')->columnSpanFull()->required(),
                TinyEditor::make('text_ru')->columnSpanFull()->required(),
                TinyEditor::make('text_en')->columnSpanFull()->required(),
                TextInput::make('link')
            ]);
    }
}
