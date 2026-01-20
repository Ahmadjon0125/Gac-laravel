<?php

namespace App\Filament\Resources\AboutFours;

use App\Filament\Resources\AboutFours\Pages\CreateAboutFour;
use App\Filament\Resources\AboutFours\Pages\EditAboutFour;
use App\Filament\Resources\AboutFours\Pages\ListAboutFours;
use App\Filament\Resources\AboutFours\Schemas\AboutFourForm;
use App\Filament\Resources\AboutFours\Tables\AboutFoursTable;
use App\Models\AboutFour;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutFourResource extends Resource
{
    protected static ?string $model = AboutFour::class;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::Newspaper;

    public static function form(Schema $schema): Schema
    {
        return AboutFourForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutFoursTable::configure($table);
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
            'index' => ListAboutFours::route('/'),
            'create' => CreateAboutFour::route('/create'),
            'edit' => EditAboutFour::route('/{record}/edit'),
        ];
    }
}
