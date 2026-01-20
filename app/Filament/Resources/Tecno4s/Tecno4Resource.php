<?php

namespace App\Filament\Resources\Tecno4s;

use App\Filament\Resources\Tecno4s\Pages\CreateTecno4;
use App\Filament\Resources\Tecno4s\Pages\EditTecno4;
use App\Filament\Resources\Tecno4s\Pages\ListTecno4s;
use App\Filament\Resources\Tecno4s\Schemas\Tecno4Form;
use App\Filament\Resources\Tecno4s\Tables\Tecno4sTable;
use App\Models\Tecno4;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno4Resource extends Resource
{
    protected static ?string $model = Tecno4::class;
       protected static ?string $navigationLabel = 'Tecno ElectroPlatform'; 

     protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    public static function form(Schema $schema): Schema
    {
        return Tecno4Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno4sTable::configure($table);
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
            'index' => ListTecno4s::route('/'),
            'create' => CreateTecno4::route('/create'),
            'edit' => EditTecno4::route('/{record}/edit'),
        ];
    }
}
