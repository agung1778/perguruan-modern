<?php

namespace App\Filament\Resources\FoundationLeaders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FoundationLeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                TextInput::make('name')
                    ->label('Nama Kepala Yayasan')
                    ->required()
                    ->maxLength(255),


                TextInput::make('position')
                    ->label('Jabatan')
                    ->default('Ketua Yayasan')
                    ->maxLength(255),


                FileUpload::make('photo')
                    ->label('Foto Kepala Yayasan')
                    ->image()
                    ->disk('public')
                    ->directory('foundation/leaders')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),


                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(5)
                    ->columnSpanFull(),

            ]);
    }
}