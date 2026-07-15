<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class NewsArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('news_category_id')
                    ->default(null),
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')
                    ->label('Thubnail')
                    ->image()
                    ->disk('public')
                    ->directory('homepage-banners')
                    ->visibility('public')
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
