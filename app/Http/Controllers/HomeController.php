<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\About;
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
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke()
    {
        $selectedAcademicYear = request()->query('academic_year');

        $data = Cache::remember(
            'homepage.data.' . ($selectedAcademicYear ?? 'latest'),
            now()->addHours(6),
            function () use ($selectedAcademicYear) {
                $website = WebsiteSetting::first();

                $academicYears = StudentData::query()
                    ->whereNotNull('academic_year')
                    ->distinct()
                    ->orderByDesc('academic_year')
                    ->pluck('academic_year');

                $activeAcademicYear = $selectedAcademicYear;

                if (
                    blank($activeAcademicYear)
                    || ! $academicYears->contains($activeAcademicYear)
                ) {
                    $activeAcademicYear = $academicYears->first();
                }

                $banners = HomepageBanner::query()
                    ->where('is_active', true)
                    ->latest()
                    ->get();

                $about = About::first();

                /*
                |--------------------------------------------------------------------------
                | TAHUN AJARAN TERBARU GLOBAL
                |--------------------------------------------------------------------------
                */

                $units = EducationUnit::query()
                    ->active()
                    ->withCount('teachers')
                    ->with([
                        'students' => function ($query) use (
                            $activeAcademicYear
                        ) {
                            $query
                                ->with('major')
                                ->when(
                                    $activeAcademicYear,
                                    fn ($query) =>
                                        $query->where(
                                            'academic_year',
                                            $activeAcademicYear
                                        )
                                );
                        },
                    ])
                    ->orderBy('sort_order')
                    ->orderBy('name')
                    ->get();

                $units->each(
                    function (EducationUnit $unit) use (
                        $activeAcademicYear
                    ) {
                        $latestStudents = $unit->students
                            ->where(
                                'academic_year',
                                $activeAcademicYear
                            );

                        $unit->setAttribute(
                            'latest_academic_year',
                            $activeAcademicYear
                        );

                        $unit->setAttribute(
                            'latest_student_total',
                            $latestStudents->sum(
                                'total_count'
                            )
                        );

                        $unit->setAttribute(
                            'latest_student_male',
                            $latestStudents->sum(
                                'male_count'
                            )
                        );

                        $unit->setAttribute(
                            'latest_student_female',
                            $latestStudents->sum(
                                'female_count'
                            )
                        );
                    }
                );

                /*
                |--------------------------------------------------------------------------
                | ORGANISASI
                |--------------------------------------------------------------------------
                */

                $organizations = FoundationOrganization::query()
                    ->active()
                    ->ordered()
                    ->get();

                $leader = FoundationLeader::query()
                    ->latest()
                    ->first();

                /*
                |--------------------------------------------------------------------------
                | BERITA
                |--------------------------------------------------------------------------
                */

                $news = NewsArticle::query()
                    ->published()
                    ->latest('published_at')
                    ->take(6)
                    ->get();

                /*
                |--------------------------------------------------------------------------
                | AGENDA
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
                | GALERI
                |--------------------------------------------------------------------------
                */

                $gallery = GalleryAlbum::query()
                    ->with('photos')
                    ->latest()
                    ->take(6)
                    ->get();

                /*
                |--------------------------------------------------------------------------
                | TESTIMONI
                |--------------------------------------------------------------------------
                */

                $testimonials = Testimonial::query()
                    ->latest()
                    ->take(6)
                    ->get();

                /*
                |--------------------------------------------------------------------------
                | STATISTIK HOMEPAGE
                |--------------------------------------------------------------------------
                */

                $studentStatistics = StudentData::query()
                    ->when(
                        $activeAcademicYear,
                        fn ($query) =>
                            $query->where(
                                'academic_year',
                                $activeAcademicYear
                            )
                    )
                    ->selectRaw('
                        COALESCE(SUM(male_count), 0) as male,
                        COALESCE(SUM(female_count), 0) as female,
                        COALESCE(SUM(total_count), 0) as total,
                        COALESCE(SUM(scholarship_tahfiz), 0) as scholarship_tahfiz,
                        COALESCE(SUM(scholarship_akademik), 0) as scholarship_akademik,
                        COALESCE(SUM(scholarship_non_akademik), 0) as scholarship_non_akademik,
                        COALESCE(SUM(scholarship_yatim), 0) as scholarship_yatim,
                        COALESCE(SUM(scholarship_yayasan), 0) as scholarship_yayasan
                    ')
                    ->first();

                $totalScholarship =
                    (int) $studentStatistics->scholarship_tahfiz
                    + (int) $studentStatistics->scholarship_akademik
                    + (int) $studentStatistics->scholarship_non_akademik
                    + (int) $studentStatistics->scholarship_yatim
                    + (int) $studentStatistics->scholarship_yayasan;

                $stats = [
                    'students' => (int) $studentStatistics->total,

                    'male' => (int) $studentStatistics->male,

                    'female' => (int) $studentStatistics->female,

                    'scholarship' => $totalScholarship,

                    'academic_year' => $activeAcademicYear,

                    'teachers' => Teacher::count(),

                    'units' => EducationUnit::query()
                        ->active()
                        ->count(),

                    'news' => NewsArticle::query()
                        ->published()
                        ->count(),
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
                    'stats',
                    'academicYears',
                    'activeAcademicYear'
                );
            }
        );

        $data['selectedAcademicYear'] = $selectedAcademicYear;

        return view(
            'pages.home',
            $data
        );
    }
}
