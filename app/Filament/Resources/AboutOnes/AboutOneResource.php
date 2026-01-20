<?php

namespace App\Filament\Resources\AboutOnes;

use App\Filament\Resources\AboutOnes\Pages\CreateAboutOne;
use App\Filament\Resources\AboutOnes\Pages\EditAboutOne;
use App\Filament\Resources\AboutOnes\Pages\ListAboutOnes;
use App\Filament\Resources\AboutOnes\Schemas\AboutOneForm;
use App\Filament\Resources\AboutOnes\Tables\AboutOnesTable;
use App\Models\AboutOne;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutOneResource extends Resource
{
    protected static ?string $model = AboutOne::class;
    protected static ?string $navigationLabel = 'About Hero'; 

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Newspaper;

    public static function form(Schema $schema): Schema
    {
        return AboutOneForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutOnesTable::configure($table);
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
            'index' => ListAboutOnes::route('/'),
            'create' => CreateAboutOne::route('/create'),
            'edit' => EditAboutOne::route('/{record}/edit'),
        ];
    }
}
