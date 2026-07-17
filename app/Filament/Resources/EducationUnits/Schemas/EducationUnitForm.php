<?php

namespace App\Filament\Resources\EducationUnits\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EducationUnitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Nama Unit Pendidikan')
                    ->required()
                    ->maxLength(255),


                TextInput::make('short_name')
                    ->label('Singkatan Unit')
                    ->maxLength(50),


                FileUpload::make('logo')
                    ->label('Logo Sekolah')
                    ->image()
                    ->disk('public')
                    ->directory('education-units/logos')
                    ->visibility('public')
                    ->imageEditor()
                    ->preserveFilenames(),


                FileUpload::make('photo')
                    ->label('Foto Sekolah')
                    ->image()
                    ->disk('public')
                    ->directory('education-units/photos')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),


                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(5)
                    ->columnSpanFull(),


                TextInput::make('website')
                    ->label('Website Sekolah')
                    ->url()
                    ->placeholder('https://website-sekolah.com'),

            ]);
    }
}