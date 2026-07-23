<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Agendas\AgendaResource;
use App\Filament\Resources\EducationUnits\EducationUnitResource;
use App\Filament\Resources\NewsArticles\NewsArticleResource;
use App\Filament\Resources\Teachers\TeacherResource;
use Filament\Widgets\Widget;

class QuickActions extends Widget
{
    protected string $view = 'filament.widgets.quick-actions';

    protected int | string | array $columnSpan = 'full';

    public function getActions(): array
    {
        return [
            [
                'label' => 'Tambah Berita',
                'description' => 'Buat artikel berita baru',
                'icon' => 'heroicon-o-newspaper',
                'url' => NewsArticleResource::getUrl('create'),
            ],

            [
                'label' => 'Tambah Agenda',
                'description' => 'Tambahkan kegiatan baru',
                'icon' => 'heroicon-o-calendar-days',
                'url' => AgendaResource::getUrl('create'),
            ],

            [
                'label' => 'Tambah Unit',
                'description' => 'Tambah unit pendidikan',
                'icon' => 'heroicon-o-building-office-2',
                'url' => EducationUnitResource::getUrl('create'),
            ],

            [
                'label' => 'Tambah Guru',
                'description' => 'Tambahkan data guru',
                'icon' => 'heroicon-o-user-plus',
                'url' => TeacherResource::getUrl('create'),
            ],
        ];
    }
}