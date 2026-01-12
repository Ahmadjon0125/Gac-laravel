<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mainTitle_uz'),
                TextColumn::make('mainTitle_ru'),
                TextColumn::make('mainTitle_en'),
                TextColumn::make('mainText_uz'),
                TextColumn::make('mainText_ru'),
                TextColumn::make('mainText_en'),
                ImageColumn::make('mainBg')->disk('public'),
                ImageColumn::make('mainImg')->disk('public'),
                TextColumn::make('title_uz'),
                TextColumn::make('title_ru'),
                TextColumn::make('title_en'),
                TextColumn::make('text_uz'),
                TextColumn::make('text_ru'),
                TextColumn::make('text_en'),
                TextColumn::make('lastTitle_uz'),
                TextColumn::make('lastTitle_ru'),
                TextColumn::make('lastTitle_en'),
                TextColumn::make('lastText_uz'),
                TextColumn::make('lastText_ru'),
                TextColumn::make('lastText_en'),
                ImageColumn::make('image')->disk('public'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
