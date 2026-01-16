<?php

namespace App\Filament\Resources\GuaranteeTexts\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Schemas\Schema;

class GuaranteeTextForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TinyEditor::make('text_uz')->required(),
                TinyEditor::make('text_ru')->required(),
                TinyEditor::make('text_en')->required(),

            ]);
    }
}
