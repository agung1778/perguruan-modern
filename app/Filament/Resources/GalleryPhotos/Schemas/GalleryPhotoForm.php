<?php

namespace App\Filament\Resources\GalleryPhotos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalleryPhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('gallery_album_id')
                    ->required(),
                FileUpload::make('photo')
                ->label('photo')
                ->image()
                ->disk('public')
                ->directory('gallery')
                ->visibility('public')
                ->imageEditor()
                ->preserveFilenames(),
            ]);
    }
}
