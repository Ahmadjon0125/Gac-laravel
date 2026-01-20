<?php

namespace App\Filament\Resources\Videos;

use App\Filament\Resources\Videos\Pages\CreateVideos;
use App\Filament\Resources\Videos\Pages\EditVideos;
use App\Filament\Resources\Videos\Pages\ListVideos;
use App\Filament\Resources\Videos\Schemas\VideosForm;
use App\Filament\Resources\Videos\Tables\VideosTable;
use App\Models\Videos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VideosResource extends Resource
{
    protected static ?string $model = Videos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::VideoCamera;

    public static function form(Schema $schema): Schema
    {
        return VideosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideosTable::configure($table);
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
            'index' => ListVideos::route('/'),
            'create' => CreateVideos::route('/create'),
            'edit' => EditVideos::route('/{record}/edit'),
        ];
    }
}
