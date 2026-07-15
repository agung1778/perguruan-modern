<?php

namespace App\Filament\Resources\NewsArticles\Schemas;

use App\Models\NewsArticle;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NewsArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('news_category_id')
                    ->placeholder('-'),
                TextEntry::make('title'),
                TextEntry::make('thumbnail')
                    ->placeholder('-'),
                TextEntry::make('content')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (NewsArticle $record): bool => $record->trashed()),
            ]);
    }
}
