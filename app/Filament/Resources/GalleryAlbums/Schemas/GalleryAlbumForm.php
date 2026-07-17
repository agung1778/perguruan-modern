<?php

namespace App\Filament\Resources\GalleryAlbums\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GalleryAlbumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Nama Album')
                    ->required()
                    ->maxLength(255),


                Textarea::make('description')
                    ->label('Deskripsi Album')
                    ->rows(5)
                    ->columnSpanFull(),

            ]);
    }
}