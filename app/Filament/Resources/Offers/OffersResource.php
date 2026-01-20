<?php

namespace App\Filament\Resources\Offers;

use App\Filament\Resources\Offers\Pages\CreateOffers;
use App\Filament\Resources\Offers\Pages\EditOffers;
use App\Filament\Resources\Offers\Pages\ListOffers;
use App\Filament\Resources\Offers\Schemas\OffersForm;
use App\Filament\Resources\Offers\Tables\OffersTable;
use App\Models\Offers;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OffersResource extends Resource
{
    protected static ?string $model = Offers::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OffersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OffersTable::configure($table);
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
            'index' => ListOffers::route('/'),
            'create' => CreateOffers::route('/create'),
            'edit' => EditOffers::route('/{record}/edit'),
        ];
    }
}
