<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([


                Select::make('news_category_id')
                    ->label('Kategori Berita')
                    ->relationship(
                        'category',
                        'name'
                    )
                    ->searchable()
                    ->preload()
                    ->required(),


                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255),


                FileUpload::make('thumbnail')
                    ->label('Thumbnail Berita')
                    ->image()
                    ->disk('public')
                    ->directory('news/thumbnails')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),


                Textarea::make('content')
                    ->label('Isi Berita')
                    ->rows(10)
                    ->required()
                    ->columnSpanFull(),


            ]);
    }
}