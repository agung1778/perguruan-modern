<?php

namespace App\Filament\Resources\Teachers\Tables;

use App\Models\Teacher;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TeacherTable
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
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('unit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('subject')
                    ->label('Bidang / Mata Pelajaran')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('employment_status')
                    ->label('Status Kepegawaian')
                    ->badge()
                    ->formatStateUsing(
                        fn (?string $state): string => match ($state) {
                            'GTY' => 'GTY',
                            'GTT' => 'GTT',
                            'KYT' => 'KYT',
                            'KTT' => 'KTT',
                            default => $state ?? '-',
                        }
                    ),

                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(
                        fn (bool $state): string =>
                            $state ? 'Aktif' : 'Tidak Aktif'
                    )
                    ->color(
                        fn (bool $state): string =>
                            $state ? 'success' : 'danger'
                    ),

                TextColumn::make('join_year')
                    ->label('Tahun Bergabung')
                    ->sortable()
                    ->toggleable(),

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

                SelectFilter::make('employment_status')
                    ->label('Status Kepegawaian')
                    ->options([
                        'GTY' => 'GTY - Guru Tetap Yayasan',
                        'GTT' => 'GTT - Guru Tidak Tetap',
                        'KYT' => 'KYT - Karyawan Tetap',
                        'KTT' => 'KTT - Karyawan Tidak Tetap',
                    ]),

                SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        1 => 'Aktif',
                        0 => 'Tidak Aktif',
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