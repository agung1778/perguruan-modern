<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                TextInput::make('name')
                    ->label('Nama Siswa')
                    ->required()
                    ->maxLength(255),


                TextInput::make('nisn')
                    ->label('NISN')
                    ->required()
                    ->maxLength(20),


                TextInput::make('class')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(50),


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