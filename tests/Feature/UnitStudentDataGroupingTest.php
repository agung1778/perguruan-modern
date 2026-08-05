<?php

namespace Tests\Feature;

use App\Models\EducationUnit;
use App\Models\Major;
use App\Models\StudentData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UnitStudentDataGroupingTest extends TestCase
{
    use RefreshDatabase;

    public function test_unit_detail_groups_student_data_by_major(): void
    {
        $unit = EducationUnit::query()->create([
            'name' => 'SMP Amaliah',
            'short_name' => 'SMP',
            'description' => 'Unit test',
            'website' => 'https://example.com',
            'is_active' => true,
        ]);

        $majorA = Major::query()->create([
            'education_unit_id' => $unit->id,
            'name' => 'Jurusan A',
            'short_name' => 'JA',
            'is_active' => true,
        ]);

        $majorB = Major::query()->create([
            'education_unit_id' => $unit->id,
            'name' => 'Jurusan B',
            'short_name' => 'JB',
            'is_active' => true,
        ]);

        StudentData::query()->create([
            'education_unit_id' => $unit->id,
            'major_id' => $majorA->id,
            'major' => 'Jurusan A',
            'academic_year' => '2025/2026',
            'generation' => '2025',
            'male_count' => 10,
            'female_count' => 5,
            'total_count' => 15,
        ]);

        StudentData::query()->create([
            'education_unit_id' => $unit->id,
            'major_id' => $majorB->id,
            'major' => 'Jurusan B',
            'academic_year' => '2025/2026',
            'generation' => '2025',
            'male_count' => 4,
            'female_count' => 4,
            'total_count' => 8,
        ]);

        $response = $this->get(route('units.show', $unit));

        $response->assertOk();

        $html = $response->getContent();

        $this->assertSame(1, substr_count($html, 'Jurusan A'));
        $this->assertSame(1, substr_count($html, 'Jurusan B'));
    }
}
