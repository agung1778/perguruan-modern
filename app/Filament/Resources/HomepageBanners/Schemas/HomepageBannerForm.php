<?php

namespace App\Filament\Resources\HomepageBanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomepageBannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Judul Banner')
                    ->required()
                    ->maxLength(255),


                Textarea::make('description')
                    ->label('Deskripsi Banner')
                    ->rows(5)
                    ->columnSpanFull(),


                FileUpload::make('image')
                    ->label('Gambar Banner')
                    ->image()
                    ->disk('public')
                    ->directory('homepage/banners')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),


                TextInput::make('button_text')
                    ->label('Text Tombol')
                    ->maxLength(100),


                TextInput::make('button_link')
                    ->label('Link Tombol')
                    ->maxLength(255),


                Toggle::make('is_active')
                    ->label('Banner Aktif')
                    ->default(true),

            ]);
    }
}