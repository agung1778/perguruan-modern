<?php

namespace App\Filament\Resources\Teachers\Tables;

use App\Models\EducationUnit;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TeachersTable
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
                    ->label('Nama Guru')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('educationUnit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nip')
                    ->label('NIP / NIK')
                    ->searchable(),

                TextColumn::make('gender')
                    ->label('JK')
                    ->formatStateUsing(
                        fn ($state) => match ($state) {
                            'L' => 'Laki-laki',
                            'P' => 'Perempuan',
                            default => '-',
                        }
                    ),

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

            ->filters([

                SelectFilter::make('education_unit_id')
                    ->label('Unit Pendidikan')
                    ->relationship(
                        'educationUnit',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

                SelectFilter::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),

                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'Tetap' => 'Guru Tetap',
                        'Tidak Tetap' => 'Guru Tidak Tetap',
                        'Honorer' => 'Guru Honorer',
                        'Kontrak' => 'Guru Kontrak',
                    ]),

            ])

            ->headerActions([

                ImportAction::make()
                    ->label('Import Excel')
                    ->importer(
                        \App\Filament\Imports\TeacherImporter::class
                    ),

                ExportAction::make()
                    ->label('Export Excel')
                    ->exporter(
                        \App\Filament\Exports\TeacherExporter::class
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