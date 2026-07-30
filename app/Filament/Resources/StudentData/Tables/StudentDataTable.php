<?php

namespace App\Filament\Resources\StudentData\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentDataTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                /*
                |--------------------------------------------------------------------------
                | INFORMASI PENDIDIKAN
                |--------------------------------------------------------------------------
                */

                TextColumn::make('educationUnit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('class')
                    ->label('Kelas')
                    ->searchable()
                    ->placeholder('-'),

                TextColumn::make('major')
                    ->label('Jurusan')
                    ->searchable()
                    ->placeholder('-'),

                TextColumn::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->sortable()
                    ->badge()
                    ->searchable(),

                /*
                |--------------------------------------------------------------------------
                | DATA MURID
                |--------------------------------------------------------------------------
                */

                TextColumn::make('male_count')
                    ->label('Laki-laki')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('female_count')
                    ->label('Perempuan')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('total_count')
                    ->label('Total Murid')
                    ->numeric()
                    ->sortable()
                    ->alignCenter()
                    ->weight('bold'),

                /*
                |--------------------------------------------------------------------------
                | DATA BEASISWA
                |--------------------------------------------------------------------------
                */

                TextColumn::make('scholarship_tahfiz')
                    ->label('Tahfiz')
                    ->numeric()
                    ->alignCenter()
                    ->toggleable(),

                TextColumn::make('scholarship_akademik')
                    ->label('Akademik')
                    ->numeric()
                    ->alignCenter()
                    ->toggleable(),

                TextColumn::make('scholarship_non_akademik')
                    ->label('Non-Akademik')
                    ->numeric()
                    ->alignCenter()
                    ->toggleable(),

                TextColumn::make('scholarship_yatim')
                    ->label('Yatim')
                    ->numeric()
                    ->alignCenter()
                    ->toggleable(),

                TextColumn::make('scholarship_yayasan')
                    ->label('Yayasan')
                    ->numeric()
                    ->alignCenter()
                    ->toggleable(),

                TextColumn::make('total_scholarship')
                    ->label('Total Beasiswa')
                    ->state(
                        fn ($record): int =>
                            (int) $record->scholarship_tahfiz
                            + (int) $record->scholarship_akademik
                            + (int) $record->scholarship_non_akademik
                            + (int) $record->scholarship_yatim
                            + (int) $record->scholarship_yayasan
                    )
                    ->numeric()
                    ->alignCenter()
                    ->weight('bold'),
            ])

            /*
            |--------------------------------------------------------------------------
            | FILTER
            |--------------------------------------------------------------------------
            */

            ->filters([

                // Filter berdasarkan unit pendidikan
                \Filament\Tables\Filters\SelectFilter::make(
                    'education_unit_id'
                )
                    ->label('Unit Pendidikan')
                    ->relationship(
                        'educationUnit',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

                // Filter berdasarkan tahun
                \Filament\Tables\Filters\SelectFilter::make('academic_year')
                ->label('Tahun Ajaran')
                ->options(
                    fn () => \App\Models\StudentData::query()
                        ->select('academic_year')
                        ->whereNotNull('academic_year')
                        ->distinct()
                        ->orderByDesc('academic_year')
                        ->pluck('academic_year', 'academic_year')
                        ->toArray()
                ),
            ])

            /*
            |--------------------------------------------------------------------------
            | DEFAULT SORT
            |--------------------------------------------------------------------------
            */

            ->defaultSort('academic_year', 'desc')

            /*
            |--------------------------------------------------------------------------
            | ACTIONS
            |--------------------------------------------------------------------------
            */

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
