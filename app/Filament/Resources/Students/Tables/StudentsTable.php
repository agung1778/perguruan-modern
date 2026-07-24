<?php

namespace App\Filament\Resources\Students\Tables;

use App\Exports\StudentsExport;
use App\Exports\StudentsExportByIds;
use Filament\Actions\BulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;

class StudentsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name')
                    ->label(
                        'Nama Siswa'
                    )
                    ->searchable()
                    ->sortable(),

                TextColumn::make(
                    'educationUnit.name'
                )
                    ->label(
                        'Unit Pendidikan'
                    )
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('batch')
                    ->label(
                        'Angkatan'
                    )
                    ->sortable(),

                TextColumn::make('major')
                    ->label(
                        'Jurusan'
                    )
                    ->toggleable(),

                TextColumn::make('class')
                    ->label(
                        'Kelas'
                    )
                    ->toggleable(),

                TextColumn::make('status')
                    ->label(
                        'Status'
                    )
                    ->badge()
                    ->formatStateUsing(
                        fn ($state) => match (
                            $state
                        ) {
                            'active' =>
                                'Aktif',

                            'graduated' =>
                                'Lulus',

                            'inactive' =>
                                'Tidak Aktif',

                            'transferred' =>
                                'Pindah',

                            'dropped_out' =>
                                'Keluar',

                            default =>
                                ucfirst(
                                    $state ?? '-'
                                ),
                        }
                    ),

                TextColumn::make(
                    'created_at'
                )
                    ->label(
                        'Ditambahkan'
                    )
                    ->dateTime(
                        'd M Y H:i'
                    )
                    ->sortable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

            ])

            ->filters([

                SelectFilter::make(
                    'education_unit_id'
                )
                    ->label(
                        'Unit Pendidikan'
                    )
                    ->relationship(
                        'educationUnit',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

                SelectFilter::make(
                    'status'
                )
                    ->label(
                        'Status'
                    )
                    ->options([
                        'active' =>
                            'Aktif',

                        'graduated' =>
                            'Lulus',

                        'inactive' =>
                            'Tidak Aktif',

                        'transferred' =>
                            'Pindah',

                        'dropped_out' =>
                            'Keluar',
                    ]),

                SelectFilter::make(
                    'gender'
                )
                    ->label(
                        'Jenis Kelamin'
                    )
                    ->options([
                        'L' =>
                            'Laki-laki',

                        'P' =>
                            'Perempuan',
                    ]),

            ])

            ->actions([

                EditAction::make(),

            ])

            ->bulkActions([

                BulkAction::make(
                    'export'
                )
                    ->label(
                        'Export Excel'
                    )
                    ->icon(
                        'heroicon-o-arrow-down-tray'
                    )
                    ->action(
                        function (
                            $records
                        ) {

                            $ids =
                                $records
                                    ->pluck('id')
                                    ->toArray();

                            return Excel::download(
                                new StudentsExportByIds(
                                    $ids
                                ),
                                'data-siswa.xlsx'
                            );
                        }
                    ),

            ])

            ->defaultSort(
                'created_at',
                'desc'
            );
    }
}