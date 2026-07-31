<?php

namespace App\Filament\Resources\EducationUnits\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class EducationUnitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function ($query) {
                return $query->withCount([
                    'students',
                    'teachers',
                ]);
            })

            ->defaultSort('name', 'asc')

            ->columns([

                /*
                |--------------------------------------------------------------------------
                | LOGO
                |--------------------------------------------------------------------------
                */
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->circular()
                    ->size(50),


                /*
                |--------------------------------------------------------------------------
                | NAMA UNIT
                |--------------------------------------------------------------------------
                */
                TextColumn::make('name')
                    ->label('Nama Unit')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(
                        fn ($record) => $record->short_name
                            ?: 'Tidak ada nama singkat'
                    ),


                /*
                |--------------------------------------------------------------------------
                | JUMLAH SISWA
                |--------------------------------------------------------------------------
                */
                TextColumn::make('students_count')
                    ->label('Siswa')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->color('success'),


                /*
                |--------------------------------------------------------------------------
                | JUMLAH GURU
                |--------------------------------------------------------------------------
                */
                TextColumn::make('teachers_count')
                    ->label('Guru')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->color('info'),


                /*
                |--------------------------------------------------------------------------
                | WEBSITE
                |--------------------------------------------------------------------------
                */
                TextColumn::make('website')
                    ->label('Website')
                    ->url(
                        fn ($record) => $record->website
                    )
                    ->openUrlInNewTab()
                    ->limit(30)
                    ->placeholder('Tidak tersedia')
                    ->toggleable(),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */
                ToggleColumn::make('is_active')
                    ->label('Aktif')
                    ->sortable(),


                /*
                |--------------------------------------------------------------------------
                | TERAKHIR DIPERBARUI
                |--------------------------------------------------------------------------
                */
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

            ])

            ->recordActions([
                EditAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}