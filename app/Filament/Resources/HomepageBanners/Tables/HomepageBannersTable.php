<?php

namespace App\Filament\Resources\HomepageBanners\Tables;

use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class HomepageBannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')

            ->columns([

                ImageColumn::make('image')
                    ->label('Banner')
                    ->disk('public')
                    ->height(70)
                    ->width(120)
                    ->extraImgAttributes([
                        'class' => 'object-cover rounded-lg',
                    ]),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                TextColumn::make('button_text')
                    ->label('Tombol')
                    ->placeholder('-'),

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Aktif'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

            ])

            ->actions([
                EditAction::make(),
            ])

            ->bulkActions([
                DeleteBulkAction::make(),
            ])

            ->defaultPaginationPageOption(10);
    }
}