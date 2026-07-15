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
                    ->label('Nama Unit')
                    ->required(),
                TextInput::make('short_name')
                    ->label('Singkatan'),
                FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->disk('public')
                    ->directory('logos')
                    ->visibility('public')
                    ->imageEditor()
                    ->preserveFilenames(),
                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('homepage-banners')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),
                Textarea::make('description')
                    ->rows(5),
                TextInput::make('website')
                    ->url(),
            ]);
    }
}
