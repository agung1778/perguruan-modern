<?php

namespace App\Filament\Resources\WebsiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WebsiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                TextInput::make('site_name')
                    ->label('Nama Website')
                    ->required()
                    ->maxLength(255),


                FileUpload::make('logo')
                    ->label('Logo Website')
                    ->image()
                    ->disk('public')
                    ->directory('website/logo')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames(),


                TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->maxLength(50),


                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),


                Textarea::make('address')
                    ->label('Alamat')
                    ->rows(5)
                    ->columnSpanFull(),


                Textarea::make('maps')
                    ->label('Google Maps Embed')
                    ->rows(5)
                    ->columnSpanFull(),


                TextInput::make('facebook')
                    ->label('Facebook')
                    ->url(),


                TextInput::make('instagram')
                    ->label('Instagram')
                    ->url(),


                TextInput::make('youtube')
                    ->label('Youtube')
                    ->url(),

            ]);
    }
}