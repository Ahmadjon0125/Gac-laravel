<?php

namespace App\Filament\Resources\Tecno3s;

use App\Filament\Resources\Tecno3s\Pages\CreateTecno3;
use App\Filament\Resources\Tecno3s\Pages\EditTecno3;
use App\Filament\Resources\Tecno3s\Pages\ListTecno3s;
use App\Filament\Resources\Tecno3s\Schemas\Tecno3Form;
use App\Filament\Resources\Tecno3s\Tables\Tecno3sTable;
use App\Models\Tecno3;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno3Resource extends Resource
{
    protected static ?string $model = Tecno3::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return Tecno3Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno3sTable::configure($table);
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
            'index' => ListTecno3s::route('/'),
            'create' => CreateTecno3::route('/create'),
            'edit' => EditTecno3::route('/{record}/edit'),
        ];
    }
}
