<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Models
|--------------------------------------------------------------------------
*/

use App\Models\WebsiteSetting;
use App\Models\HomepageBanner;
use App\Models\About;
use App\Models\EducationUnit;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\NewsArticle;
use App\Models\Agenda;
use App\Models\GalleryAlbum;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Homepage
     */
    public function __invoke()
    {
        $data = Cache::remember(
            'homepage',
            now()->addHours(6),
            function () {
                /*
                |--------------------------------------------------------------------------
                | Website Information
                |--------------------------------------------------------------------------
                */
                $website = WebsiteSetting::first();
                /*
                |--------------------------------------------------------------------------
                | Hero Banner
                |--------------------------------------------------------------------------
                */
                $banners = HomepageBanner::query()
                    ->where('is_active', true)
                    ->latest()
                    ->get();
                                    /*
                |--------------------------------------------------------------------------
                | About
                |--------------------------------------------------------------------------
                */
                $about = About::first();
                /*
                |--------------------------------------------------------------------------
                | Education Units
                |--------------------------------------------------------------------------
                */
                $units = EducationUnit::query()
                    ->withCount([
                        'students',
                        'teachers'
                    ])
                    ->latest()
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Foundation Organization
                |--------------------------------------------------------------------------
                */
                $organizations = FoundationOrganization::query()
                    ->orderBy('position')
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Foundation Leader
                |--------------------------------------------------------------------------
                */
                $leader = FoundationLeader::query()
                    ->latest()
                    ->first();
                /*
                |--------------------------------------------------------------------------
                | Latest News
                |--------------------------------------------------------------------------
                */
                $news = NewsArticle::query()
                    ->where('status','published')
                    ->latest()
                    ->take(6)
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Upcoming Agenda
                |--------------------------------------------------------------------------
                */
                $agendas = Agenda::query()
                    ->whereDate(
                        'date',
                        '>=',
                        now()
                    )
                    ->orderBy('date')
                    ->take(5)
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Gallery
                |--------------------------------------------------------------------------
                */
                $gallery = GalleryAlbum::query()
                    ->with('photos')
                    ->latest()
                    ->take(6)
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */
                $testimonials = Testimonial::query()
                    ->latest()
                    ->take(6)
                    ->get();
                /*
                |--------------------------------------------------------------------------
                | Statistics
                |--------------------------------------------------------------------------
                */
                $stats = [
                    'students' => Student::count(),
                    'teachers' => Teacher::count(),
                    'units' => EducationUnit::count(),
                    'news' => NewsArticle::count(),
                ];
                return compact(
                    'website',
                    'banners',
                    'units',
                    'organizations',
                    'leader',
                    'news',
                    'agendas',
                    'gallery',
                    'testimonials',
                    'stats'
                );
            }
        );

        return view(
            'pages.home',
            $data
        );
    }
}