<?php

namespace App\Filament\Resources\GalleryAlbums\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleryAlbumsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                /*
                |--------------------------------------------------------------------------
                | JUDUL
                |--------------------------------------------------------------------------
                */

                TextColumn::make('title')
                    ->label('Judul Album')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(
                        fn ($record) => $record->description
                            ? str($record->description)->limit(60)
                            : null
                    ),


                /*
                |--------------------------------------------------------------------------
                | SLUG
                |--------------------------------------------------------------------------
                */

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),


                /*
                |--------------------------------------------------------------------------
                | JUMLAH FOTO
                |--------------------------------------------------------------------------
                */

                TextColumn::make('photos_count')
                    ->label('Jumlah Foto')
                    ->counts('photos')
                    ->badge()
                    ->color('success'),


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
                | TANGGAL
                |--------------------------------------------------------------------------
                */

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(
                        isToggledHiddenByDefault: true
                    ),

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