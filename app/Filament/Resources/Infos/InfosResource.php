<?php

namespace App\Filament\Resources\Infos;

use App\Filament\Resources\Infos\Pages\CreateInfos;
use App\Filament\Resources\Infos\Pages\EditInfos;
use App\Filament\Resources\Infos\Pages\ListInfos;
use App\Filament\Resources\Infos\Schemas\InfosForm;
use App\Filament\Resources\Infos\Tables\InfosTable;
use App\Models\Infos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InfosResource extends Resource
{
    protected static ?string $model = Infos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InfosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InfosTable::configure($table);
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
            'index' => ListInfos::route('/'),
            'create' => CreateInfos::route('/create'),
            'edit' => EditInfos::route('/{record}/edit'),
        ];
    }
}
