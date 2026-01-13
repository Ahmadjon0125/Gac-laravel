<?php

namespace App\Filament\Resources\Guarantees\Schemas;

use Filament\Forms\Components\FileUpload;
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
                TextInput::make('title_uz')->required(),
                TextInput::make('title_ru')->required(),
                TextInput::make('title_en')->required(),


                FileUpload::make('file_path')
                    ->label('Hujjatni yuklang')
                    ->disk('public')
                    ->storeFileNamesIn('original_filename')
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, Set $set) {
                        // ⚠️ faqat haqiqiy yuklangan fayl bo‘lsa
                        if ($state instanceof TemporaryUploadedFile) {

                            // 📄 Fayl turi
                            $extension = $state->getClientOriginalExtension();
                            $set('file_type', strtoupper($extension));

                            // 📦 Fayl hajmi
                            $bytes = $state->getSize();

                            if ($bytes >= 1048576) {
                                $size = number_format($bytes / 1048576, 1) . ' MB';
                            } else {
                                $size = number_format($bytes / 1024, 0) . ' KB';
                            }

                            $set('file_size', $size);
                        }
                    }),

                Section::make('Fayl maʼlumotlari (Avtomatik to‘ldiriladi)')
                    ->schema([
                        TextInput::make('file_type')
                            ->label('Fayl turi (masalan: PDF)')
                            ->disabled()
                             ->dehydrated(),

                        TextInput::make('file_size')
                            ->label('Fayl hajmi (masalan: 120 KB)')
                            ->disabled()
                             ->dehydrated(),
                    ])
                    ->columns(2),
            ]);
    }
}
