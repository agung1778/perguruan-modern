<?php

namespace App\Filament\Resources\WebsiteSettings\Schemas;


use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;


class WebsiteSettingForm
{

    public static function configure(Schema $schema): Schema
    {

        return $schema

            ->components([


                TextInput::make('school_name')
                    ->label('Nama Perguruan')
                    ->required(),



                FileUpload::make('logo')
                    ->label('Logo Perguruan')
                    ->image()
                    ->disk('public')
                    ->directory('website')
                    ->visibility('public')
                    ->imageEditor(),



                FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->disk('public')
                    ->directory('website')
                    ->visibility('public'),



                Textarea::make('about')
                    ->label('Tentang Perguruan')
                    ->rows(6)
                    ->columnSpanFull(),



                Textarea::make('history')
                    ->label('Sejarah Perguruan')
                    ->rows(8)
                    ->columnSpanFull(),



                Textarea::make('vision')
                    ->label('Visi')
                    ->rows(5)
                    ->columnSpanFull(),



                Textarea::make('mission')
                    ->label('Misi')
                    ->rows(8)
                    ->columnSpanFull(),



                TextInput::make('address')
                    ->label('Alamat'),



                TextInput::make('phone')
                    ->label('Nomor Telepon'),



                TextInput::make('email')
                    ->label('Email')
                    ->email(),



                TextInput::make('google_maps')
                    ->label('Google Maps Embed'),



                TextInput::make('facebook')
                    ->label('Facebook'),


                TextInput::make('instagram')
                    ->label('Instagram'),


                TextInput::make('youtube')
                    ->label('Youtube'),


                Textarea::make('meta_description')
                    ->label('SEO Description')
                    ->rows(3),


            ]);

    }

}