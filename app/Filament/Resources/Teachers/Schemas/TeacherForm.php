<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('education_unit_id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('photo')
                    ->default(null),
                TextInput::make('nip')
                    ->default(null),
                TextInput::make('position')
                    ->required(),
            ]);
    }
}
