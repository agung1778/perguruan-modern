<?php

namespace App\Filament\Resources\GalleryPhotos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleryPhotosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                /*
                |--------------------------------------------------------------------------
                | Foto
                |--------------------------------------------------------------------------
                */
                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->square()
                    ->size(80),

                /*
                |--------------------------------------------------------------------------
                | Album
                |--------------------------------------------------------------------------
                */
                TextColumn::make('album.title')
                    ->label('Album')
                    ->searchable()
                    ->sortable()
                    ->badge(),

                /*
                |--------------------------------------------------------------------------
                | Keterangan
                |--------------------------------------------------------------------------
                */
                TextColumn::make('caption')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable()
                    ->placeholder('-'),

                /*
                |--------------------------------------------------------------------------
                | Urutan
                |--------------------------------------------------------------------------
                */
                TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable()
                    ->alignCenter(),

                /*
                |--------------------------------------------------------------------------
                | Tanggal
                |--------------------------------------------------------------------------
                */
                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

            ])

            ->defaultSort(
                'order',
                'asc'
            )

            ->filters([

                // Filter album bisa ditambahkan jika dibutuhkan.

            ])

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