<?php

namespace App\Filament\Resources\FoundationLeaders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FoundationLeadersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                /*
                |--------------------------------------------------------------------------
                | FOTO
                |--------------------------------------------------------------------------
                */

                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->circular()
                    ->size(55),


                /*
                |--------------------------------------------------------------------------
                | NAMA
                |--------------------------------------------------------------------------
                */

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),


                /*
                |--------------------------------------------------------------------------
                | JABATAN
                |--------------------------------------------------------------------------
                */

                TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable()
                    ->sortable(),


                /*
                |--------------------------------------------------------------------------
                | PERIODE
                |--------------------------------------------------------------------------
                */

                TextColumn::make('period')
                    ->label('Periode')
                    ->placeholder('-')
                    ->sortable(),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */

                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),


                /*
                |--------------------------------------------------------------------------
                | UPDATED
                |--------------------------------------------------------------------------
                */

                TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->defaultSort(
                'created_at',
                'desc'
            )

            ->actions([
                EditAction::make(),
            ])

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}