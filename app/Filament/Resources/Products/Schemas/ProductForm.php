<?php

namespace App\Filament\Resources\Products\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    TextInput::make('mainTitle_uz')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                        $set('slug_uz', Str::slug($state));
                    }),
                    TextInput::make('mainTitle_ru')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                        $set('slug_ru', Str::slug($state));
                    }),
                    TextInput::make('mainTitle_en')->required()->live(onBlur: true)->afterStateUpdated(function (Set $set, $state) {
                        $set('slug_en', Str::slug($state));
                    }),

                ])->columnSpanFull(),
                Grid::make(3)->schema([

                    TextInput::make('slug_uz')->required(),
                    TextInput::make('slug_ru')->required(),
                    TextInput::make('slug_en')->required(),
                ])->columnSpanFull(),
                Select::make('category')
                    ->label('Kategoriya')
                    ->options(Product::getCategoryOptions()) 
                    ->required()
                    ->native(false),
                TinyEditor::make('mainText_uz')->columnSpanFull()->required(),
                TinyEditor::make('mainText_ru')->columnSpanFull()->required(),
                TinyEditor::make('mainText_en')->columnSpanFull()->required(),
                FileUpload::make('mainBg')->disk('public')->image()->downloadable()->required(),
                FileUpload::make('mainImg')->disk('public')->image()->downloadable()->required(),
                TextInput::make('title_uz')->required(),
                TextInput::make('title_ru')->required(),
                TextInput::make('title_en')->required(),
                TinyEditor::make('text_uz')->columnSpanFull()->required(),
                TinyEditor::make('text_ru')->columnSpanFull()->required(),
                TinyEditor::make('text_en')->columnSpanFull()->required(),
                FileUpload::make('slides1')->label('Slides1')->multiple()->disk('public')->image()->nullable(),
                FileUpload::make('slides2')->label('Slides2')->multiple()->disk('public')->image()->nullable(),
                TextInput::make('lastTitle_uz')->required(),
                TextInput::make('lastTitle_ru')->required(),
                TextInput::make('lastTitle_en')->required(),
                TinyEditor::make('lastText_uz')->columnSpanFull()->required(),
                TinyEditor::make('lastText_ru')->columnSpanFull()->required(),
                TinyEditor::make('lastText_en')->columnSpanFull()->required(),
                FileUpload::make('image')->disk('public')->image()->downloadable()->required(),
            ]);
    }
}
