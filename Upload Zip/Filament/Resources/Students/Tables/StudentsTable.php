<?php

namespace App\Filament\Resources\Students\Tables;

use App\Filament\Exports\StudentExporter;
use App\Filament\Imports\StudentImporter;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('educationUnit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('gender')
                    ->label('Jenis Kelamin'),

                TextColumn::make('batch')
                    ->label('Angkatan')
                    ->sortable(),

                TextColumn::make('class')
                    ->label('Kelas')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Lulus' => 'info',
                        'Pindah' => 'warning',
                        'Tidak Aktif' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y')
                    ->sortable(),

            ])

            ->defaultSort(
                'created_at',
                'desc'
            )

            ->headerActions([

                ImportAction::make()
                    ->label('Import Excel')
                    ->icon('heroicon-o-arrow-up-tray')
                    ->importer(
                        StudentImporter::class
                    ),

                ExportAction::make()
                    ->label('Export Excel')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->exporter(
                        StudentExporter::class
                    ),

            ])

            ->actions([

                EditAction::make(),

                DeleteAction::make(),

            ])

            ->defaultPaginationPageOption(10)

            ->paginated([
                10,
                25,
                50,
                100,
            ]);
    }
}