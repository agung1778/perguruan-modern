<?php

namespace App\Filament\Resources\FoundationOrganizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FoundationOrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI ORGANISASI
                |--------------------------------------------------------------------------
                */

                Section::make('Informasi Struktur Organisasi')
                    ->description(
                        'Masukkan informasi mengenai pengurus atau struktur organisasi perguruan.'
                    )
                    ->icon('heroicon-o-building-office-2')
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255)
                            ->placeholder(
                                'Contoh: Ahmad Fauzi, S.Pd.'
                            ),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder(
                                'Contoh: Sekretaris Yayasan'
                            ),

                        TextInput::make('order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->integer()
                            ->minValue(0)
                            ->default(0)
                            ->required()
                            ->helperText(
                                'Semakin kecil angka, semakin awal ditampilkan.'
                            ),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->helperText(
                                'Nonaktifkan jika data tidak ingin ditampilkan pada website.'
                            )
                            ->inline(false),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | FOTO
                |--------------------------------------------------------------------------
                */

                Section::make('Foto Pengurus')
                    ->description(
                        'Upload foto pengurus yang akan ditampilkan pada halaman struktur organisasi.'
                    )
                    ->icon('heroicon-o-camera')
                    ->schema([

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('foundation-organizations')
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

            ]);
    }
}