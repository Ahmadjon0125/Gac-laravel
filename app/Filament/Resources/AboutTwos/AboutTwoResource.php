<?php

namespace App\Filament\Resources\AboutTwos;

use App\Filament\Resources\AboutTwos\Pages\CreateAboutTwo;
use App\Filament\Resources\AboutTwos\Pages\EditAboutTwo;
use App\Filament\Resources\AboutTwos\Pages\ListAboutTwos;
use App\Filament\Resources\AboutTwos\Schemas\AboutTwoForm;
use App\Filament\Resources\AboutTwos\Tables\AboutTwosTable;
use App\Models\AboutTwo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutTwoResource extends Resource
{
    protected static ?string $model = AboutTwo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AboutTwoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutTwosTable::configure($table);
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
            'index' => ListAboutTwos::route('/'),
            'create' => CreateAboutTwo::route('/create'),
            'edit' => EditAboutTwo::route('/{record}/edit'),
        ];
    }
}
