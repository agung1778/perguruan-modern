<?php

namespace App\Filament\Widgets;

use App\Models\NewsArticle;
use Filament\Widgets\Widget;

class LatestNews extends Widget
{
    protected string $view = 'filament.widgets.latest-news';

    protected int | string | array $columnSpan = [
        'default' => 1,
        'lg' => 2,
    ];

    public function getLatestNews()
    {
        return NewsArticle::query()
            ->latest()
            ->limit(5)
            ->get();
    }
}