<?php

namespace App\Filament\Resources\Guarantees\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class GuaranteeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Umumiy maʼlumotlar')
                    ->schema([
                     
                        TinyEditor::make('text_uz')->required()->label('Tavsif matni'),
                        TinyEditor::make('text_ru')->required()->label('Tavsif matni'),
                        TinyEditor::make('text_en')->required()->label('Tavsif matni'),
                    ]),

                Section::make('Kafolat fayllari')
                    ->schema([
                        Repeater::make('files')
                            ->label('Fayllar ro‘yxati')
                            ->itemLabel(fn(array $state): ?string => $state['original_name'] ?? 'Yangi fayl')
                            ->schema([
                                FileUpload::make('file_path')
                                    ->label('Hujjatni tanlang')
                                    ->disk('public')
                                    ->directory('guarantees')
                                    ->required()
                                    ->live()
                                    ->afterStateUpdated(function ($state, Set $set) {
                                        if ($state instanceof TemporaryUploadedFile) {
                                            // Fayl ma'lumotlarini avtomatik to'ldirish
                                            $set('original_name', $state->getClientOriginalName());
                                            $ext = strtoupper($state->getClientOriginalExtension());
                                            $set('file_type', $ext);

                                            $bytes = $state->getSize();
                                            $size = ($bytes >= 1048576)
                                                ? number_format($bytes / 1048576, 1) . ' MB'
                                                : number_format($bytes / 1024, 0) . ' KB';
                                            $set('file_size', $size);
                                        }
                                    }),

                                TextInput::make('original_name')->label('Asl nomi')->disabled()->dehydrated(),
                                TextInput::make('file_type')->label('Turi')->disabled()->dehydrated(),
                                TextInput::make('file_size')->label('Hajmi')->disabled()->dehydrated(),
                            ])
                            ->columnSpanFull()
                            ->createItemButtonLabel('Fayl qo‘shish')
                            ->reorderable(true) // Fayllar o'rnini surib o'zgartirish
                           
                    ]),
            ]);
    }
}
