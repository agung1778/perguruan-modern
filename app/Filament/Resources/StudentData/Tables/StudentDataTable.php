<?php

namespace App\Filament\Resources\StudentData\Tables;
use App\Models\StudentData;
use Filament\Tables\Filters\SelectFilter;
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
            ->modifyQueryUsing(
                fn ($query) => $query->with([
                    'educationUnit',
                    'major',
                ])
            )
            ->columns([

                TextColumn::make('educationUnit.name')
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('major_name')
                    ->label('Jurusan')
                    ->state(
                        fn (StudentData $record): string =>
                            $record->major_name
                            ?? 'Tanpa Jurusan'
                    )
                    ->searchable(
                        false
                    )
                    ->sortable(
                        false
                    )
                    ->placeholder('Tanpa Jurusan'),

                TextColumn::make('generation')
                    ->label('Angkatan')
                    ->searchable()
                    ->sortable()
                    ->placeholder('-'),

                TextColumn::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->sortable()
                    ->searchable()
                    ->badge(),

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
                    ->label('Total Siswa')
                    ->numeric()
                    ->sortable()
                    ->alignCenter()
                    ->weight('bold'),

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
                        fn (StudentData $record): int =>
                            $record->total_scholarship
                    )
                    ->numeric()
                    ->alignCenter()
                    ->weight('bold'),
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

                SelectFilter::make('major_id')
                    ->label('Jurusan')
                    ->relationship(
                        'major',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

                SelectFilter::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->options(
                        fn () => StudentData::query()
                            ->whereNotNull('academic_year')
                            ->distinct()
                            ->orderByDesc('academic_year')
                            ->pluck(
                                'academic_year',
                                'academic_year'
                            )
                            ->toArray()
                    ),
            ])
            ->defaultSort(
                'academic_year',
                'desc'
            )
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
