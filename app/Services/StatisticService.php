<?php

namespace App\Services;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\EducationUnit;
use App\Models\NewsArticle;
use Illuminate\Support\Facades\Cache;

class StatisticService
{
    public function homepage()
    {
        return Cache::remember(

            'homepage.statistics',

            now()->addHour(),

            function () {

                return [

                    'teachers'=>Teacher::count(),

                    'students'=>Student::count(),

                    'units'=>EducationUnit::count(),

                    'news'=>NewsArticle::count(),

                ];

            }

        );
    }
}