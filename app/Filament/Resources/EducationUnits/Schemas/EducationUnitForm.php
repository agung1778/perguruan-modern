<?php

namespace App\Filament\Resources\EducationUnits\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EducationUnitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Unit Pendidikan')
                    ->description('Kelola informasi unit pendidikan Perguruan Amaliah.')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Unit')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: SMK Amaliah'),

                        TextInput::make('short_name')
                            ->label('Singkatan')
                            ->maxLength(50)
                            ->placeholder('Contoh: SMK'),

                        TextInput::make('website')
                            ->label('Website')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://example.com'),

                        FileUpload::make('logo')
                            ->label('Logo Unit')
                            ->image()
                            ->disk('public')
                            ->directory('education-units/logos')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                        FileUpload::make('photo')
                            ->label('Foto Unit')
                            ->image()
                            ->disk('public')
                            ->directory('education-units/photos')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(5120),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(6)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}