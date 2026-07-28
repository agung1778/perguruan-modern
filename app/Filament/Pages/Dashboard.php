<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = -1;

    public function getHeading(): string
    {
        return 'Dashboard';
    }

    public function getSubheading(): ?string
    {
        return 'Ringkasan informasi dan aktivitas website Perguruan Amaliah.';
    }

    public function getColumns(): int | array
    {
        return [
            'default' => 1,
            'sm' => 2,
            'lg' => 4,
            'xl' => 4,
        ];
    }
}