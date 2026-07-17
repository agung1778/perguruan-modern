<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),


                FileUpload::make('photo')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials/photos')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames(),


                Textarea::make('message')
                    ->label('Pesan Testimoni')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

            ]);
    }
}