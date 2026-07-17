<?php

namespace App\Filament\Resources\NewsArticles\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;


class NewsArticleForm
{

    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required(),
                Select::make('category_id')
                    ->label('Kategori Berita')
                    ->relationship(
                        'category',
                        'name'
                    )
                    ->searchable()
                    ->preload()
                    ->required(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail Berita')
                    ->image()
                    ->disk('public')
                    ->directory('news')
                    ->visibility('public')
                    ->imageEditor()
                    ->preserveFilenames()
                    ->required(),
                Textarea::make('content')
                    ->label('Isi Berita')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}