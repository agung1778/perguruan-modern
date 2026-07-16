<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class TeacherChart extends ChartWidget
{
    protected ?string $heading = 'Teacher Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
