<?php

namespace App\Filament\Resources\GuaranteeForms\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GuaranteeFormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')->required()->disabled(),
                TextInput::make('full_name')->required()->disabled(),
                TextInput::make('phone')->required()->disabled(),
                TextInput::make('region')->required()->disabled(),
                TextInput::make('address')->required()->disabled(),
                TextInput::make('employee_count')->required()->disabled(),
                TextInput::make('additional_info')->required()->disabled(),
            ]);
    }
}
