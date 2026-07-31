<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kategori')
                    ->description(
                        'Kelola kategori berita yang digunakan pada website.'
                    )
                    ->icon('heroicon-o-tag')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Kategori')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                function (
                                    $state,
                                    callable $set,
                                    $context
                                ) {
                                    if (
                                        $context === 'create'
                                        && filled($state)
                                    ) {
                                        $set(
                                            'slug',
                                            Str::slug($state)
                                        );
                                    }
                                }
                            ),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(
                                table: 'news_categories',
                                column: 'slug',
                                ignoreRecord: true
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Digunakan sebagai identitas URL kategori.'
                            ),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->inline(false),
                    ])
                    ->columns(2),
            ]);
    }
}