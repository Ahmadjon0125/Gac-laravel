<?php

namespace App\Filament\Resources\Feedback\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FeedbackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label('ФИО')
                    ->disabled(), // Tahrirlashni taqiqlash

                TextInput::make('phone')
                    ->label('Номер телефона')
                    ->disabled(),

                Textarea::make('comment')
                    ->label('Комментарий')
                    ->disabled(),
            ]);
    }
}
