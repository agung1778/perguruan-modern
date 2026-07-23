<?php

namespace App\Filament\Widgets;

use App\Models\Agenda;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Collection;

class UpcomingAgenda extends Widget
{
    protected string $view = 'filament.widgets.upcoming-agenda';

    protected int|string|array $columnSpan = 'full';

    public function getAgendas(): Collection
    {
        return Agenda::query()
            ->whereDate('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->take(5)
            ->get();
    }
}