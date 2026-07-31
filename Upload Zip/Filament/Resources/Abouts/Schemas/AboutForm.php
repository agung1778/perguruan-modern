<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | IDENTITAS
                |--------------------------------------------------------------------------
                */

                Section::make('Identitas Tentang Perguruan')
                    ->description(
                        'Informasi utama yang ditampilkan pada halaman Tentang Perguruan.'
                    )
                    ->icon('heroicon-o-information-circle')
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul')
                            ->placeholder('Tentang Perguruan Amaliah')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('established')
                            ->label('Tahun Berdiri')
                            ->placeholder('1990')
                            ->maxLength(10)
                            ->helperText(
                                'Masukkan tahun berdirinya perguruan.'
                            ),

                        FileUpload::make('image')
                            ->label('Foto Tentang Perguruan')
                            ->image()
                            ->disk('public')
                            ->directory('about')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText(
                                'Format JPG, JPEG, PNG atau WEBP. Maksimal 5 MB.'
                            )
                            ->columnSpanFull(),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | DESKRIPSI
                |--------------------------------------------------------------------------
                */

                Section::make('Deskripsi Perguruan')
                    ->description(
                        'Tuliskan informasi singkat mengenai Perguruan Amaliah.'
                    )
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder(
                                'Tuliskan deskripsi singkat mengenai perguruan...'
                            )
                            ->rows(8)
                            ->required()
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | SEJARAH
                |--------------------------------------------------------------------------
                */

                Section::make('Sejarah Perguruan')
                    ->description(
                        'Informasi mengenai sejarah dan perkembangan perguruan.'
                    )
                    ->icon('heroicon-o-clock')
                    ->schema([

                        Textarea::make('history')
                            ->label('Sejarah')
                            ->placeholder(
                                'Tuliskan sejarah berdirinya dan perkembangan perguruan...'
                            )
                            ->rows(12)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | VISI
                |--------------------------------------------------------------------------
                */

                Section::make('Visi')
                    ->description(
                        'Visi utama Perguruan Amaliah.'
                    )
                    ->icon('heroicon-o-eye')
                    ->schema([

                        Textarea::make('vision')
                            ->label('Visi Perguruan')
                            ->placeholder(
                                'Tuliskan visi perguruan...'
                            )
                            ->rows(6)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | MISI
                |--------------------------------------------------------------------------
                */

                Section::make('Misi')
                    ->description(
                        'Misi yang menjadi pedoman dalam menjalankan pendidikan.'
                    )
                    ->icon('heroicon-o-flag')
                    ->schema([

                        Textarea::make('mission')
                            ->label('Misi Perguruan')
                            ->placeholder(
                                'Tuliskan misi perguruan...'
                            )
                            ->rows(10)
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}