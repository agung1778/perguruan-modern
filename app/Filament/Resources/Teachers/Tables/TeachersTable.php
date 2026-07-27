<?php

namespace App\Filament\Resources\Teachers\Tables;

use App\Filament\Exports\TeacherExporter;
use App\Filament\Imports\TeacherImporter;

use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeachersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('educationUnit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama Guru')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),

                TextColumn::make('nuptk')
                    ->label('NUPTK')
                    ->searchable(),

                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])

            ->headerActions([
                ImportAction::make()
                    ->importer(TeacherImporter::class),

                ExportAction::make()
                    ->exporter(TeacherExporter::class),
            ])

            ->actions([
                EditAction::make(),
            ])

            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}