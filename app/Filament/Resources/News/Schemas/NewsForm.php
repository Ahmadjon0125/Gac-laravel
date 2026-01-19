<?php

namespace App\Filament\Resources\News\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([

                    Grid::make(3)->schema([
                        TextInput::make('title_uz')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                            $set('slug_uz', Str::slug($state));
                        }),
                        TextInput::make('title_ru')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                            $set('slug_ru', Str::slug($state));
                        }),
                        TextInput::make('title_en')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                            $set('slug_en', Str::slug($state));
                        }),
                    ])->columnSpanFull(),

                    Grid::make(3)->schema([
                        TextInput::make('slug_uz')->required(),
                        TextInput::make('slug_ru')->required(),
                        TextInput::make('slug_en')->required(),
                    ])->columnSpanFull(),
                ])->columnSpanFull(),

                FileUpload::make('img')->disk('public')->image()->downloadable()->required(),
                TinyEditor::make('text_uz')->columnSpanFull()->required(),
                TinyEditor::make('text_ru')->columnSpanFull()->required(),
                TinyEditor::make('text_en')->columnSpanFull()->required(),
                DatePicker::make('newsDate')->required()
            ]);
    }
}
