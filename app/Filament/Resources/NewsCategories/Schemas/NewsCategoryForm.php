<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255),

            ]);
    }
}