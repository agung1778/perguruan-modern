<?php

namespace App\Filament\Resources\Ppdbs\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PpdbsTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->columns([

                TextColumn::make(
                    'educationUnit.name'
                )
                    ->label('Unit Pendidikan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Judul PPDB')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->sortable(),

                TextColumn::make(
                    'registration_start'
                )
                    ->label('Mulai')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make(
                    'registration_end'
                )
                    ->label('Berakhir')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'gray' => 'draft',
                        'success' => 'published',
                        'danger' => 'closed',
                    ]),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                IconColumn::make('is_published')
                    ->label('Publik')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

            ])

            ->filters([

                SelectFilter::make(
                    'education_unit_id'
                )
                    ->label('Unit Pendidikan')
                    ->relationship(
                        'educationUnit',
                        'name'
                    )
                    ->searchable()
                    ->preload(),

                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Dipublikasikan',
                        'closed' => 'Ditutup',
                    ]),

                TrashedFilter::make(),

            ])

            ->recordActions([

                EditAction::make(),

                DeleteAction::make(),

                RestoreAction::make(),

                ForceDeleteAction::make(),

            ])

            ->defaultSort(
                'created_at',
                'desc'
            );
    }
}