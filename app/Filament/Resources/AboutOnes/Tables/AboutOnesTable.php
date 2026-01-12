<?php

namespace App\Filament\Resources\AboutOnes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutOnesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_uz'),
                TextColumn::make('title_ru'),
                TextColumn::make('title_en'),
                TextColumn::make('title2_uz'),
                TextColumn::make('title2_ru'),
                TextColumn::make('title2_en'),
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
