<?php

namespace App\Filament\Resources\GuaranteeForms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GuaranteeFormsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')->label('Kompaniya'),
            TextColumn::make('full_name')->label('F.I.O'),
            TextColumn::make('phone')->label('Telefon'),
            TextColumn::make('region')->label('Region'),
            TextColumn::make('created_at')->label('Sana')->dateTime(),
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
