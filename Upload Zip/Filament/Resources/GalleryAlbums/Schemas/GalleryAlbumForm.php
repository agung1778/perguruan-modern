<?php

namespace App\Filament\Resources\GalleryAlbums\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryAlbumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI ALBUM
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Album')
                    ->description(
                        'Masukkan informasi utama mengenai album galeri.'
                    )
                    ->icon('heroicon-o-photo')
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul Album')
                            ->required()
                            ->maxLength(255)
                            ->placeholder(
                                'Contoh: Kegiatan Hari Kemerdekaan'
                            ),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->maxLength(255)
                            ->unique(
                                table: 'gallery_albums',
                                column: 'slug',
                                ignoreRecord: true
                            )
                            ->helperText(
                                'Digunakan sebagai alamat URL album.'
                            )
                            ->placeholder(
                                'kegiatan-hari-kemerdekaan'
                            ),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(5)
                            ->placeholder(
                                'Tuliskan deskripsi singkat mengenai album ini...'
                            )
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->helperText(
                                'Aktifkan agar album dapat ditampilkan di website.'
                            )
                            ->inline(false),

                    ])
                    ->columns(2),

            ]);
    }
}