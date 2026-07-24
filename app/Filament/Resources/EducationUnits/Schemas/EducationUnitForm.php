<?php

namespace App\Filament\Resources\EducationUnits\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EducationUnitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI UNIT
                |--------------------------------------------------------------------------
                */
                Section::make('Informasi Unit Pendidikan')
                    ->description('Kelola informasi utama unit pendidikan.')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Unit')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: SMA Amaliah'),

                        TextInput::make('short_name')
                            ->label('Nama Singkat')
                            ->maxLength(50)
                            ->placeholder('Contoh: SMA'),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(7)
                            ->columnSpanFull()
                            ->placeholder(
                                'Tuliskan informasi mengenai unit pendidikan ini...'
                            ),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | MEDIA UNIT
                |--------------------------------------------------------------------------
                */
                Section::make('Media Unit')
                    ->description('Kelola logo dan foto unit pendidikan.')
                    ->icon('heroicon-o-photo')
                    ->schema([

                        FileUpload::make('logo')
                            ->label('Logo Unit')
                            ->image()
                            ->disk('public')
                            ->directory('education-units/logos')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText(
                                'Format JPG, JPEG, PNG. Maksimal 5 MB.'
                            ),

                        FileUpload::make('photo')
                            ->label('Foto Unit')
                            ->image()
                            ->disk('public')
                            ->directory('education-units/photos')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText(
                                'Gunakan foto gedung atau lingkungan unit pendidikan.'
                            ),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | WEBSITE RESMI
                |--------------------------------------------------------------------------
                */
                Section::make('Website Resmi')
                    ->description(
                        'Tambahkan alamat website resmi unit pendidikan jika tersedia.'
                    )
                    ->icon('heroicon-o-globe-alt')
                    ->schema([

                        TextInput::make('website')
                            ->label('URL Website')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://example.com')
                            ->prefixIcon('heroicon-o-link')
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */
                Section::make('Status Unit')
                    ->description(
                        'Atur apakah unit pendidikan ditampilkan pada website publik.'
                    )
                    ->icon('heroicon-o-eye')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Unit Aktif')
                            ->default(true)
                            ->helperText(
                                'Jika dinonaktifkan, unit tidak akan ditampilkan pada halaman publik.'
                            ),

                    ]),

            ]);
    }
}