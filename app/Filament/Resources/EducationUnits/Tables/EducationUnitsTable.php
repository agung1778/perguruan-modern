<?php

namespace App\Filament\Resources\EducationUnits\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EducationUnitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nama Unit')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('short_name')
                    ->label('Singkatan')
                    ->searchable(),

                TextColumn::make('students_count')
                    ->label('Siswa')
                    ->counts('students')
                    ->sortable(),

                TextColumn::make('teachers_count')
                    ->label('Guru')
                    ->counts('teachers')
                    ->sortable(),

                TextColumn::make('website')
                    ->label('Website')
                    ->limit(30)
                    ->url(fn ($record) => $record->website, true),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}