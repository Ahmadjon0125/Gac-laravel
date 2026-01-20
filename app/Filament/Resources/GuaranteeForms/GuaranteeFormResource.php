<?php

namespace App\Filament\Resources\GuaranteeForms;

use App\Filament\Resources\GuaranteeForms\Pages\CreateGuaranteeForm;
use App\Filament\Resources\GuaranteeForms\Pages\EditGuaranteeForm;
use App\Filament\Resources\GuaranteeForms\Pages\ListGuaranteeForms;
use App\Filament\Resources\GuaranteeForms\Schemas\GuaranteeFormForm;
use App\Filament\Resources\GuaranteeForms\Tables\GuaranteeFormsTable;

use App\Models\GuaranteeForms;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GuaranteeFormResource extends Resource
{
    protected static ?string $model = GuaranteeForms::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QuestionMarkCircle;

    public static function form(Schema $schema): Schema
    {
        return GuaranteeFormForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GuaranteeFormsTable::configure($table);
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
            'index' => ListGuaranteeForms::route('/'),
            'create' => CreateGuaranteeForm::route('/create'),
            'edit' => EditGuaranteeForm::route('/{record}/edit'),
        ];
    }
}
