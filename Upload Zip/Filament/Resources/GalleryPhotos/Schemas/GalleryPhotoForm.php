<?php

namespace App\Filament\Resources\GalleryPhotos\Schemas;

use App\Models\GalleryAlbum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryPhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Informasi Foto
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Foto')
                    ->description(
                        'Kelola foto dan informasi yang ditampilkan pada galeri website.'
                    )
                    ->icon('heroicon-o-photo')
                    ->schema([

                        Select::make('gallery_album_id')
                            ->label('Album Galeri')
                            ->relationship(
                                name: 'album',
                                titleAttribute: 'title'
                            )
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Pilih album galeri'),

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('gallery/photos')
                            ->visibility('public')
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->maxSize(10240)
                            ->required()
                            ->helperText(
                                'Format JPG, JPEG, PNG atau WEBP. Maksimal 10 MB.'
                            ),

                        Textarea::make('caption')
                            ->label('Keterangan Foto')
                            ->placeholder(
                                'Contoh: Kegiatan upacara peringatan Hari Kemerdekaan'
                            )
                            ->rows(4)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->integer()
                            ->default(0)
                            ->minValue(0)
                            ->helperText(
                                'Semakin kecil angka, semakin awal foto ditampilkan.'
                            ),

                    ])
                    ->columns(2),

            ]);
    }
}