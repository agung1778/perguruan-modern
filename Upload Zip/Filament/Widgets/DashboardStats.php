<?php

namespace App\Filament\Widgets;

use App\Models\EducationUnit;
use App\Models\NewsArticle;
use App\Models\Student;
use App\Models\Teacher;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make(
                'Total Siswa',
                Student::count()
            )
                ->description('Jumlah seluruh siswa')
                ->descriptionIcon('heroicon-o-academic-cap')
                ->color('success'),

            Stat::make(
                'Total Guru',
                Teacher::count()
            )
                ->description('Jumlah seluruh guru')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),

            Stat::make(
                'Unit Pendidikan',
                EducationUnit::count()
            )
                ->description('Jumlah unit pendidikan')
                ->descriptionIcon('heroicon-o-building-office-2')
                ->color('success'),

            Stat::make(
                'Total Berita',
                NewsArticle::count()
            )
                ->description('Berita yang telah diterbitkan')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('success'),

        ];
    }
}