<?php

namespace App\Filament\Resources\Photos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PhotosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('images')->downloadable()->disk('public')->image()->multiple()->reorderable()
            ]);
    }
}
