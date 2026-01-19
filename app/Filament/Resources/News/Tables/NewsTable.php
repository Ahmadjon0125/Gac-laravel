<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('title_uz'),
               TextColumn::make('title_ru'),
               TextColumn::make('title_en'),
               ImageColumn::make('img')->disk('public'),
               TextColumn::make('text_uz'),
               TextColumn::make('text_ru'),
               TextColumn::make('text_en'),
               TextColumn::make('newsDate')->date()
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
