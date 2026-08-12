<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agenda;
use App\Models\EducationUnit;
use App\Models\FoundationLeader;
use App\Models\FoundationOrganization;
use App\Models\GalleryAlbum;
use App\Models\HomepageBanner;
use App\Models\NewsArticle;
use App\Models\StudentData;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\WebsiteSetting;

class HomeController extends Controller
{
    public function __invoke()
    {
        $selectedAcademicYear = request('academic_year');

        $website = WebsiteSetting::first();

        $academicYears = StudentData::query()
            ->whereNotNull('academic_year')
            ->distinct()
            ->orderByDesc('academic_year')
            ->pluck('academic_year');

        $activeAcademicYear = $selectedAcademicYear;

        if (
            blank($activeAcademicYear) ||
            !$academicYears->contains($activeAcademicYear)
        ) {
            $activeAcademicYear = $academicYears->first();
        }

        /*
        |--------------------------------------------------------------------------
        | Banner
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
        | Unit Pendidikan
        |--------------------------------------------------------------------------
        */

        $units = EducationUnit::query()
            ->active()
            ->withCount('teachers')
            ->with([
                'students' => function ($query) use ($activeAcademicYear) {
                    $query
                        ->where('academic_year', $activeAcademicYear)
                        ->with('major');
                }
            ])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $units->each(function ($unit) use ($activeAcademicYear) {

            $students = $unit->students;

            $unit->latest_academic_year = $activeAcademicYear;

            $unit->latest_student_total = $students->sum('total_count');

            $unit->latest_student_male = $students->sum('male_count');

            $unit->latest_student_female = $students->sum('female_count');

            $unit->latest_scholarship =
                $students->sum('scholarship_tahfiz')
                + $students->sum('scholarship_akademik')
                + $students->sum('scholarship_non_akademik')
                + $students->sum('scholarship_yatim')
                + $students->sum('scholarship_yayasan');
        });

        /*
        |--------------------------------------------------------------------------
        | Organisasi
        |--------------------------------------------------------------------------
        */

        $organizations = FoundationOrganization::query()
            ->active()
            ->ordered()
            ->get();

        $leader = FoundationLeader::latest()->first();

        /*
        |--------------------------------------------------------------------------
        | Berita
        |--------------------------------------------------------------------------
        */

        $news = NewsArticle::query()
            ->published()
            ->latest('published_at')
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Agenda
        |--------------------------------------------------------------------------
        */

        $agendas = Agenda::query()
            ->whereDate('date', '>=', today())
            ->orderBy('date')
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Gallery
        |--------------------------------------------------------------------------
        */

        $gallery = GalleryAlbum::query()
            ->with([
                'photos' => fn($q) => $q->latest()
            ])
            ->latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Testimoni
        |--------------------------------------------------------------------------
        */

        $testimonials = Testimonial::query()
            ->latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Statistik
        |--------------------------------------------------------------------------
        */

        $statistics = StudentData::query()
            ->where('academic_year', $activeAcademicYear)
            ->selectRaw("
                SUM(total_count) total,
                SUM(male_count) male,
                SUM(female_count) female,
                SUM(scholarship_tahfiz) tahfiz,
                SUM(scholarship_akademik) akademik,
                SUM(scholarship_non_akademik) non_akademik,
                SUM(scholarship_yatim) yatim,
                SUM(scholarship_yayasan) yayasan
            ")
            ->first();

        $stats = [

            'students' => (int) ($statistics->total ?? 0),

            'male' => (int) ($statistics->male ?? 0),

            'female' => (int) ($statistics->female ?? 0),

            'scholarship' =>
                (int) ($statistics->tahfiz ?? 0)
                + (int) ($statistics->akademik ?? 0)
                + (int) ($statistics->non_akademik ?? 0)
                + (int) ($statistics->yatim ?? 0)
                + (int) ($statistics->yayasan ?? 0),

            'teachers' => Teacher::count(),

            'units' => EducationUnit::active()->count(),

            'news' => NewsArticle::published()->count(),

            'academic_year' => $activeAcademicYear,
        ];

        return view('pages.home', [
            'website'               => $website,
            'banners'               => $banners,
            'about'                 => $about,
            'units'                 => $units,
            'organizations'         => $organizations,
            'leader'                => $leader,
            'news'                  => $news,
            'agendas'               => $agendas,
            'gallery'               => $gallery,
            'testimonials'          => $testimonials,
            'stats'                 => $stats,
            'academicYears'         => $academicYears,
            'activeAcademicYear'    => $activeAcademicYear,
            'selectedAcademicYear'  => $selectedAcademicYear,
        ]);
    }
}