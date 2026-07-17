<?php

namespace App\Filament\Resources\GalleryPhotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryPhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                Select::make('gallery_album_id')
                    ->label('Album')
                    ->relationship(
                        'album',
                        'title'
                    )
                    ->searchable()
                    ->preload()
                    ->required(),


                TextInput::make('title')
                    ->label('Judul Foto')
                    ->maxLength(255),


                FileUpload::make('image')
                    ->label('Foto Kegiatan')
                    ->image()
                    ->disk('public')
                    ->directory('gallery/photos')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),

            ]);
    }
}