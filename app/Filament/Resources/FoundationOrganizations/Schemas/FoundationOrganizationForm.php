<?php

namespace App\Filament\Resources\FoundationOrganizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FoundationOrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                TextInput::make('name')
                    ->label('Nama Organisasi')
                    ->required()
                    ->maxLength(255),


                TextInput::make('position')
                    ->label('Jabatan Struktur')
                    ->required()
                    ->maxLength(255),


                FileUpload::make('photo')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('foundation/organization')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames(),


                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(5)
                    ->columnSpanFull(),

            ]);
    }
}