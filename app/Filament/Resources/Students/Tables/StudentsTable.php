<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudentTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->circular()
                    ->defaultImageUrl(
                        url('/images/default-avatar.png')
                    ),

                TextColumn::make('name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('unit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('batch')
                    ->label('Angkatan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('class')
                    ->label('Kelas')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('major')
                    ->label('Jurusan')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'success' => 'aktif',
                        'info' => 'lulus',
                        'warning' => 'pindah',
                        'danger' => 'tidak_aktif',
                    ])
                    ->formatStateUsing(
                        fn (?string $state): string => match ($state) {
                            'aktif' => 'Aktif',
                            'lulus' => 'Lulus',
                            'pindah' => 'Pindah',
                            'tidak_aktif' => 'Tidak Aktif',
                            default => ucfirst((string) $state),
                        }
                    ),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->filters([

                SelectFilter::make('education_unit_id')
                    ->label('Unit Pendidikan')
                    ->relationship(
                        name: 'unit',
                        titleAttribute: 'name'
                    )
                    ->searchable()
                    ->preload(),

                SelectFilter::make('batch')
                    ->label('Angkatan')
                    ->options(
                        fn () => \App\Models\Student::query()
                            ->whereNotNull('batch')
                            ->distinct()
                            ->orderByDesc('batch')
                            ->pluck('batch', 'batch')
                            ->toArray()
                    ),

                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'aktif' => 'Aktif',
                        'lulus' => 'Lulus',
                        'pindah' => 'Pindah',
                        'tidak_aktif' => 'Tidak Aktif',
                    ]),

                SelectFilter::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ]),

            ])

            ->recordActions([
                EditAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->defaultSort(
                'created_at',
                'desc'
            );
    }
}