<?php

namespace App\Filament\Resources\Tecno5s;

use App\Filament\Resources\Tecno5s\Pages\CreateTecno5;
use App\Filament\Resources\Tecno5s\Pages\EditTecno5;
use App\Filament\Resources\Tecno5s\Pages\ListTecno5s;
use App\Filament\Resources\Tecno5s\Schemas\Tecno5Form;
use App\Filament\Resources\Tecno5s\Tables\Tecno5sTable;
use App\Models\Tecno5;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno5Resource extends Resource
{
    protected static ?string $model = Tecno5::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return Tecno5Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno5sTable::configure($table);
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
            'index' => ListTecno5s::route('/'),
            'create' => CreateTecno5::route('/create'),
            'edit' => EditTecno5::route('/{record}/edit'),
        ];
    }
}
