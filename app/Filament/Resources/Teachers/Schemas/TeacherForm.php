<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Nama Guru')
                    ->required()
                    ->maxLength(255),


                FileUpload::make('photo')
                    ->label('Foto Guru')
                    ->image()
                    ->disk('public')
                    ->directory('teachers/photos')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames(),


                TextInput::make('nip')
                    ->label('NIP')
                    ->maxLength(50),


                TextInput::make('position')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255),


                Select::make('education_unit_id')
                    ->label('Unit Pendidikan')
                    ->relationship(
                        'educationUnit',
                        'name'
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

            ]);
    }
}