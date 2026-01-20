<?php

namespace App\Filament\Resources\Partners\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TinyEditor::make('text_uz'),
                TinyEditor::make('text_en'),
                TinyEditor::make('text_ru'),
                FileUpload::make('icons')->image()->disk('public')->label('Partners')->multiple()
            ]);
    }
}
