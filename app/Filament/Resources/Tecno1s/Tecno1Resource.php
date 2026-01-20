<?php

namespace App\Filament\Resources\Tecno1s;

use App\Filament\Resources\Tecno1s\Pages\CreateTecno1;
use App\Filament\Resources\Tecno1s\Pages\EditTecno1;
use App\Filament\Resources\Tecno1s\Pages\ListTecno1s;
use App\Filament\Resources\Tecno1s\Schemas\Tecno1Form;
use App\Filament\Resources\Tecno1s\Tables\Tecno1sTable;
use App\Models\Tecno1;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Tecno1Resource extends Resource
{
    protected static ?string $model = Tecno1::class;
       protected static ?string $navigationLabel = 'Tecno Hero'; 

  protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;

    public static function form(Schema $schema): Schema
    {
        return Tecno1Form::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Tecno1sTable::configure($table);
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
            'index' => ListTecno1s::route('/'),
            'create' => CreateTecno1::route('/create'),
            'edit' => EditTecno1::route('/{record}/edit'),
        ];
    }
}
