<?php

namespace App\Filament\Resources\GuaranteeTexts;

use App\Filament\Resources\GuaranteeTexts\Pages\CreateGuaranteeText;
use App\Filament\Resources\GuaranteeTexts\Pages\EditGuaranteeText;
use App\Filament\Resources\GuaranteeTexts\Pages\ListGuaranteeTexts;
use App\Filament\Resources\GuaranteeTexts\Schemas\GuaranteeTextForm;
use App\Filament\Resources\GuaranteeTexts\Tables\GuaranteeTextsTable;
use App\Models\GuaranteeText;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GuaranteeTextResource extends Resource
{
    protected static ?string $model = GuaranteeText::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QuestionMarkCircle;

    public static function form(Schema $schema): Schema
    {
        return GuaranteeTextForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GuaranteeTextsTable::configure($table);
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
            'index' => ListGuaranteeTexts::route('/'),
            'create' => CreateGuaranteeText::route('/create'),
            'edit' => EditGuaranteeText::route('/{record}/edit'),
        ];
    }
}
