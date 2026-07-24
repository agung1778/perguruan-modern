<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

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
    public function __invoke()
    {
        $data = Cache::remember(
            'homepage.data',
            now()->addHours(6),
            function () {

                $website = WebsiteSetting::first();

                $banners = HomepageBanner::query()
                    ->where('is_active', true)
                    ->latest()
                    ->get();

                $about = About::first();

                $units = EducationUnit::query()
                    ->where('is_active', true)
                    ->withCount([
                        'students',
                        'teachers',
                    ])
                    ->latest()
                    ->get();

                $organizations = FoundationOrganization::query()
                    ->active()
                    ->ordered()
                    ->get();

                $leader = FoundationLeader::query()
                    ->latest()
                    ->first();

                $news = NewsArticle::query()
                    ->published()
                    ->latest('published_at')
                    ->take(6)
                    ->get();

                $agendas = Agenda::query()
                    ->whereDate('date', '>=', now())
                    ->orderBy('date')
                    ->take(5)
                    ->get();

                $gallery = GalleryAlbum::query()
                    ->with('photos')
                    ->latest()
                    ->take(6)
                    ->get();

                $testimonials = Testimonial::query()
                    ->latest()
                    ->take(6)
                    ->get();

                $stats = [
                    'students' => Student::count(),
                    'teachers' => Teacher::count(),
                    'units' => EducationUnit::count(),
                    'news' => NewsArticle::where(
                        'status',
                        'published'
                    )->count(),
                ];

                return compact(
                    'website',
                    'banners',
                    'about',
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

        return view('pages.home', $data);
    }
}