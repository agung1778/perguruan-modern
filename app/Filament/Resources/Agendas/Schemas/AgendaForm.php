<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Judul Agenda')
                    ->required()
                    ->maxLength(255),


                DatePicker::make('date')
                    ->label('Tanggal Agenda')
                    ->required(),


                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

            ]);
    }
}