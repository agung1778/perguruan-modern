<?php

namespace App\Filament\Resources\FoundationLeaders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FoundationLeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | IDENTITAS PIMPINAN
                |--------------------------------------------------------------------------
                */

                Section::make('Identitas Pimpinan')
                    ->description(
                        'Informasi dasar mengenai pimpinan atau pengurus perguruan.'
                    )
                    ->icon('heroicon-o-user')
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan nama lengkap'),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder(
                                'Contoh: Ketua Yayasan'
                            ),

                        TextInput::make('period')
                            ->label('Periode Jabatan')
                            ->maxLength(255)
                            ->placeholder(
                                'Contoh: 2025 - 2030'
                            ),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->helperText(
                                'Aktifkan jika pimpinan ini ingin ditampilkan pada website.'
                            )
                            ->default(true)
                            ->inline(false),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | FOTO
                |--------------------------------------------------------------------------
                */

                Section::make('Foto Pimpinan')
                    ->description(
                        'Upload foto resmi pimpinan perguruan.'
                    )
                    ->icon('heroicon-o-camera')
                    ->schema([

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('foundation-leaders')
                            ->visibility('public')
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->maxSize(5120)
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->helperText(
                                'Format JPG, PNG, atau WEBP. Maksimal 5 MB.'
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | DESKRIPSI
                |--------------------------------------------------------------------------
                */

                Section::make('Profil Pimpinan')
                    ->description(
                        'Informasi singkat mengenai profil pimpinan.'
                    )
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        Textarea::make('message')
                            ->label('Pesan / Sambutan')
                            ->rows(8)
                            ->placeholder(
                                'Tuliskan pesan atau sambutan pimpinan...'
                            )
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}