<?php

namespace App\Filament\Resources\Advantages;

use App\Filament\Resources\Advantages\Pages\CreateAdvantages;
use App\Filament\Resources\Advantages\Pages\EditAdvantages;
use App\Filament\Resources\Advantages\Pages\ListAdvantages;
use App\Filament\Resources\Advantages\Schemas\AdvantagesForm;
use App\Filament\Resources\Advantages\Tables\AdvantagesTable;
use App\Models\Advantages;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AdvantagesResource extends Resource
{
    protected static ?string $model = Advantages::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AdvantagesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdvantagesTable::configure($table);
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
            'index' => ListAdvantages::route('/'),
            'create' => CreateAdvantages::route('/create'),
            'edit' => EditAdvantages::route('/{record}/edit'),
        ];
    }
}
