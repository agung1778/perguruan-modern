<?php

namespace App\Filament\Resources\HomepageBanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomepageBannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Konten Banner')
                    ->description('Atur konten utama yang akan ditampilkan pada homepage.')
                    ->icon('heroicon-o-photo')
                    ->schema([

                        TextInput::make('title')
                            ->label('Judul Banner')
                            ->placeholder('Selamat Datang di Perguruan Amaliah')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Deskripsi Banner')
                            ->placeholder('Membangun generasi unggul melalui pendidikan yang berkualitas.')
                            ->rows(5)
                            ->maxLength(1000)
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->label('Gambar Banner')
                            ->image()
                            ->disk('public')
                            ->directory('homepage/banners')
                            ->visibility('public')
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->maxSize(5120)
                            ->helperText(
                                'Gunakan gambar berkualitas tinggi. Disarankan menggunakan rasio 16:9.'
                            )
                            ->columnSpanFull(),

                    ]),


                Section::make('Tombol Aksi')
                    ->description('Atur tombol yang ditampilkan pada banner.')
                    ->icon('heroicon-o-cursor-arrow-rays')
                    ->schema([

                        TextInput::make('button_text')
                            ->label('Teks Tombol')
                            ->placeholder('Selengkapnya')
                            ->maxLength(100),

                        TextInput::make('button_link')
                            ->label('Link Tombol')
                            ->placeholder('/tentang-kami atau https://example.com')
                            ->helperText(
                                'Bisa menggunakan URL internal (/tentang-kami) atau URL eksternal (https://example.com).'
                            )
                            ->maxLength(500),

                    ])
                    ->columns(2),


                Section::make('Pengaturan Tampilan')
                    ->description('Atur status dan urutan banner pada homepage.')
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Banner Aktif')
                            ->helperText(
                                'Banner hanya akan ditampilkan di homepage jika status ini aktif.'
                            )
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(0)
                            ->minValue(0)
                            ->helperText(
                                'Gunakan angka lebih kecil untuk menampilkan banner lebih awal.'
                            ),

                    ])
                    ->columns(2),

            ]);
    }
}