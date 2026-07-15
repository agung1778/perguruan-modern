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
                    ->image()
                    ->directory('units/logo'),
                FileUpload::make('photo')
                    ->image()
                    ->directory('units/photo'),
                Textarea::make('description')
                    ->rows(5),
                TextInput::make('website')
                    ->url(),
            ]);
    }
}
