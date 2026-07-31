<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Testimoni')
                    ->description(
                        'Masukkan informasi orang yang memberikan testimoni.'
                    )
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('position')
                            ->label('Jabatan / Keterangan')
                            ->placeholder('Contoh: Orang Tua Siswa')
                            ->maxLength(255),

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('testimonials')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->nullable(),

                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        Textarea::make('message')
                            ->label('Isi Testimoni')
                            ->required()
                            ->rows(7)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}