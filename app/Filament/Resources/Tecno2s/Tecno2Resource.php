<?php

namespace App\Filament\Resources\Tecno2s;

use App\Filament\Resources\Tecno2s\Pages\CreateTecno2;
use App\Filament\Resources\Tecno2s\Pages\EditTecno2;
use App\Filament\Resources\Tecno2s\Pages\ListTecno2s;
use App\Filament\Resources\Tecno2s\Schemas\Tecno2Form;
use App\Filament\Resources\Tecno2s\Tables\Tecno2sTable;
use App\Models\Tecno2;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno2Resource extends Resource
{
    protected static ?string $model = Tecno2::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return Tecno2Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno2sTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTecno2s::route('/'),
            'create' => CreateTecno2::route('/create'),
            'edit' => EditTecno2::route('/{record}/edit'),
        ];
    }
}
