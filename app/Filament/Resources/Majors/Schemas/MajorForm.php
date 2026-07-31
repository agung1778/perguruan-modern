<?php

namespace App\Filament\Resources\Majors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MajorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('education_unit_id')
                ->label('Unit Pendidikan')
                ->relationship(
                    name: 'educationUnit',
                    titleAttribute: 'name'
                )
                ->searchable()
                ->preload()
                ->required(),

            TextInput::make('name')
                ->label('Nama Jurusan')
                ->required()
                ->maxLength(255),

            TextInput::make('short_name')
                ->label('Singkatan')
                ->placeholder('Contoh: PPLG')
                ->maxLength(50),

            TextInput::make('sort_order')
                ->label('Urutan')
                ->numeric()
                ->integer()
                ->default(0)
                ->minValue(0)
                ->required(),

            \Filament\Forms\Components\Toggle::make('is_active')
                ->label('Aktif')
                ->default(true),
        ]);
    }
}