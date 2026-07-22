<?php

namespace App\Filament\Resources\WebsiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WebsiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Perguruan')
                    ->description('Informasi utama yang digunakan pada website.')
                    ->icon('heroicon-o-building-library')
                    ->schema([
                        TextInput::make('school_name')
                            ->label('Nama Perguruan')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('website')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                        FileUpload::make('favicon')
                            ->label('Favicon')
                            ->image()
                            ->disk('public')
                            ->directory('website')
                            ->visibility('public')
                            ->maxSize(1024),
                    ])
                    ->columns(2),

                Section::make('Tentang Perguruan')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Textarea::make('about')
                            ->label('Tentang Singkat')
                            ->rows(5)
                            ->columnSpanFull(),

                        Textarea::make('history')
                            ->label('Sejarah')
                            ->rows(8)
                            ->columnSpanFull(),

                        Textarea::make('vision')
                            ->label('Visi')
                            ->rows(5),

                        Textarea::make('mission')
                            ->label('Misi')
                            ->rows(8),
                    ])
                    ->columns(2),

                Section::make('Informasi Kontak')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        Textarea::make('address')
                            ->label('Alamat')
                            ->rows(4),

                        TextInput::make('phone')
                            ->label('Nomor Telepon')
                            ->tel(),

                        TextInput::make('email')
                            ->label('Email')
                            ->email(),

                        Textarea::make('google_maps')
                            ->label('Google Maps / Embed URL')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media Sosial')
                    ->icon('heroicon-o-share')
                    ->schema([
                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->url(),

                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->url(),

                        TextInput::make('youtube')
                            ->label('YouTube')
                            ->url(),
                    ])
                    ->columns(3),

                Section::make('SEO')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema([
                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(4)
                            ->maxLength(160)
                            ->helperText('Disarankan maksimal 160 karakter.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}