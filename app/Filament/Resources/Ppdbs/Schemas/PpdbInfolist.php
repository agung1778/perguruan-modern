<?php

namespace App\Filament\Resources\Ppdbs\Schemas;

use App\Models\Ppdb;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PpdbInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('educationUnit.name')
                    ->label('Education unit'),
                TextEntry::make('title'),
                TextEntry::make('academic_year'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('requirements')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('schedule')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('registration_start')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('registration_end')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('registration_fee')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('registration_url')
                    ->placeholder('-'),
                TextEntry::make('contact')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->badge(),
                IconEntry::make('is_published')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Ppdb $record): bool => $record->trashed()),
            ]);
    }
}
