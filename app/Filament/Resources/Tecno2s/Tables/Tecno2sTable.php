<?php

namespace App\Filament\Resources\Tecno2s\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class Tecno2sTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('poster')->disk('public'),
                TextColumn::make('title_uz'),
                TextColumn::make('title_ru'),
                TextColumn::make('title_en'),
                TextColumn::make('text_uz'),
                TextColumn::make('text_ru'),
                TextColumn::make('text_en'),
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
