<?php

namespace App\Filament\Widgets;


use App\Models\EducationUnit;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\NewsArticle;


use Filament\Widgets\StatsOverviewWidget as BaseWidget;

use Filament\Widgets\StatsOverviewWidget\Stat;



class SchoolStats extends BaseWidget
{


protected function getStats(): array
{

return [


Stat::make(
'Unit Pendidikan',
EducationUnit::count()
)
->description('Total Unit'),



Stat::make(
'Guru',
Teacher::count()
)
->description('Total Guru'),



Stat::make(
'Siswa',
Student::count()
)
->description('Total Siswa'),



Stat::make(
'Berita',
NewsArticle::count()
)
->description('Artikel'),



];

}


}