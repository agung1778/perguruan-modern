<?php

namespace App\Http\Controllers;

use App\Models\EducationUnit;
use App\Models\StudentData;
use Illuminate\Support\Facades\Cache;

class UnitController extends Controller
{
    /**
     * Menampilkan daftar unit pendidikan.
     */
    public function index()
    {
        $units = EducationUnit::query()
            ->active()
            ->withCount('teachers')
            ->with([
                'students' => function ($query) {
                    $query
                        ->whereNotNull('academic_year')
                        ->orderByDesc('academic_year')
                        ->with('major');
                },
            ])
            ->orderBy('name')
            ->get();

        $units->each(function (EducationUnit $unit) {
            $latestStudentData = $unit->students
                ->filter(fn ($student) => $student->academic_year !== null)
                ->sortByDesc('academic_year')
                ->groupBy('academic_year')
                ->first();

            $latestAcademicYear = $latestStudentData?->first()?->academic_year;

            $latestStudents = $latestStudentData ?? collect();

            $unit->setAttribute(
                'student_statistics',
                (object) [
                    'academic_year' => $latestAcademicYear,
                    'total' => (int) $latestStudents->sum('total_count'),
                    'male' => (int) $latestStudents->sum('male_count'),
                    'female' => (int) $latestStudents->sum('female_count'),
                ]
            );
        });

        return view(
            'pages.units.index',
            compact('units')
        );
    }

    /**
     * Menampilkan detail unit pendidikan.
     */
    public function show(EducationUnit $unit)
    {
        abort_unless(
            $unit->is_active,
            404
        );

        /**
         * Tahun ajaran terbaru khusus unit.
         */
        $latestAcademicYear = StudentData::query()
            ->where(
                'education_unit_id',
                $unit->id
            )
            ->whereNotNull('academic_year')
            ->orderByDesc('academic_year')
            ->value('academic_year');

        /**
         * Semua data siswa unit pada
         * tahun ajaran terbaru.
         *
         * Bisa terdiri dari banyak jurusan.
         */
        $studentData = StudentData::query()
            ->where(
                'education_unit_id',
                $unit->id
            )
            ->when(
                $latestAcademicYear,
                fn ($query) => $query->where(
                    'academic_year',
                    $latestAcademicYear
                )
            )
            ->with('major')
            ->orderBy(
                'major_id'
            )
            ->orderBy(
                'generation'
            )
            ->get();

        /**
         * Statistik gabungan semua jurusan.
         */
        $studentStatistics = [
            'total' => (int) $studentData->sum(
                'total_count'
            ),

            'male' => (int) $studentData->sum(
                'male_count'
            ),

            'female' => (int) $studentData->sum(
                'female_count'
            ),

            'scholarship' =>
                (int) $studentData->sum(
                    'scholarship_tahfiz'
                )
                + (int) $studentData->sum(
                    'scholarship_akademik'
                )
                + (int) $studentData->sum(
                    'scholarship_non_akademik'
                )
                + (int) $studentData->sum(
                    'scholarship_yatim'
                )
                + (int) $studentData->sum(
                    'scholarship_yayasan'
                ),
        ];

        /**
         * Rekap beasiswa semua jurusan.
         */
        $scholarships = [
            'Tahfiz' => (int) $studentData->sum(
                'scholarship_tahfiz'
            ),

            'Akademik' => (int) $studentData->sum(
                'scholarship_akademik'
            ),

            'Non-Akademik' => (int) $studentData->sum(
                'scholarship_non_akademik'
            ),

            'Yatim' => (int) $studentData->sum(
                'scholarship_yatim'
            ),

            'Beasiswa Yayasan' => (int) $studentData->sum(
                'scholarship_yayasan'
            ),
        ];

        /**
         * Guru.
         */
        $teachers = $unit->teachers()
            ->latest()
            ->get();

        return view(
            'pages.units.show',
            compact(
                'unit',
                'studentData',
                'latestAcademicYear',
                'studentStatistics',
                'scholarships',
                'teachers'
            )
        );
    }
}