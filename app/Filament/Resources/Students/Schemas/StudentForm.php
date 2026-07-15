<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('education_unit_id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('nisn')
                    ->default(null),
                TextInput::make('class')
                    ->required(),
            ]);
    }
}
