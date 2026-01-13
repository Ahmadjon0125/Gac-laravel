<?php

namespace App\Filament\Resources\Tecno6s;

use App\Filament\Resources\Tecno6s\Pages\CreateTecno6;
use App\Filament\Resources\Tecno6s\Pages\EditTecno6;
use App\Filament\Resources\Tecno6s\Pages\ListTecno6s;
use App\Filament\Resources\Tecno6s\Schemas\Tecno6Form;
use App\Filament\Resources\Tecno6s\Tables\Tecno6sTable;
use App\Models\Tecno6;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno6Resource extends Resource
{
    protected static ?string $model = Tecno6::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return Tecno6Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno6sTable::configure($table);
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
            'index' => ListTecno6s::route('/'),
            'create' => CreateTecno6::route('/create'),
            'edit' => EditTecno6::route('/{record}/edit'),
        ];
    }
}
