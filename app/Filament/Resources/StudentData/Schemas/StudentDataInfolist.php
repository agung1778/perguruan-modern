<?php

namespace App\Filament\Resources\StudentData\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StudentDataInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('educationUnit.name')
                    ->label('Education unit')
                    ->placeholder('-'),
                TextEntry::make('class')
                    ->placeholder('-'),
                TextEntry::make('major')
                    ->placeholder('-'),
                TextEntry::make('male_count')
                    ->numeric(),
                TextEntry::make('female_count')
                    ->numeric(),
                TextEntry::make('total_count')
                    ->numeric(),
                TextEntry::make('scholarship_type')
                    ->placeholder('-'),
                TextEntry::make('scholarship_count')
                    ->numeric(),
                TextEntry::make('year')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
