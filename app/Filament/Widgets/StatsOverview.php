<?php

namespace App\Filament\Widgets;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\EducationUnit;
use App\Models\NewsArticle;
use App\Models\Agenda;
use App\Models\GalleryAlbum;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Guru', Teacher::count())
                ->description('Jumlah Guru')
                ->descriptionIcon('heroicon-o-academic-cap')
                ->color('primary'),

            Stat::make('Siswa', Student::count())
                ->description('Jumlah Siswa')
                ->descriptionIcon('heroicon-o-users')
                ->color('success'),

            Stat::make('Unit Pendidikan', EducationUnit::count())
                ->description('Jumlah Unit')
                ->descriptionIcon('heroicon-o-building-office')
                ->color('warning'),

            Stat::make('Berita', NewsArticle::count())
                ->description('Artikel')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('info'),

            Stat::make('Agenda', Agenda::count())
                ->description('Agenda')
                ->descriptionIcon('heroicon-o-calendar-days')
                ->color('danger'),

            Stat::make('Album', GalleryAlbum::count())
                ->description('Galeri')
                ->descriptionIcon('heroicon-o-photo')
                ->color('gray'),

        ];
    }
}