<?php

namespace App\Filament\Resources\AboutThrees;

use App\Filament\Resources\AboutThrees\Pages\CreateAboutThree;
use App\Filament\Resources\AboutThrees\Pages\EditAboutThree;
use App\Filament\Resources\AboutThrees\Pages\ListAboutThrees;
use App\Filament\Resources\AboutThrees\Schemas\AboutThreeForm;
use App\Filament\Resources\AboutThrees\Tables\AboutThreesTable;
use App\Models\AboutThree;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutThreeResource extends Resource
{
    protected static ?string $model = AboutThree::class;

 protected static string|BackedEnum|null $navigationIcon = Heroicon::Newspaper;

    public static function form(Schema $schema): Schema
    {
        return AboutThreeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutThreesTable::configure($table);
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
            'index' => ListAboutThrees::route('/'),
            'create' => CreateAboutThree::route('/create'),
            'edit' => EditAboutThree::route('/{record}/edit'),
        ];
    }
}
