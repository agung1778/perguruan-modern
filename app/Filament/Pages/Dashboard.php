<?php

namespace App\Filament\Pages;
use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    public function getColumns(): int | array
    {
        return [
            'default' => 1,
            'sm' => 2,
            'xl' => 4,
        ];
    }

    public function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\StatsOverview::class,
            \App\Filament\Widgets\QuickActions::class,
        ];
    }

    public function getFooterWidgets(): array
    {
        return [
            \App\Filament\Widgets\UpcomingAgenda::class,
            \App\Filament\Widgets\LatestNews::class,
        ];
    }
}