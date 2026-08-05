<?php

namespace Tests\Feature;

use App\Models\EducationUnit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EducationUnitOrderingTest extends TestCase
{
    use RefreshDatabase;

    public function test_education_units_are_ordered_by_sort_order(): void
    {
        EducationUnit::query()->create([
            'name' => 'Unit Kedua',
            'short_name' => 'UK2',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        EducationUnit::query()->create([
            'name' => 'Unit Pertama',
            'short_name' => 'UP1',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $ordered = EducationUnit::query()
            ->orderBy('sort_order')
            ->orderBy('name')
            ->pluck('name')
            ->all();

        $this->assertSame([
            'Unit Pertama',
            'Unit Kedua',
        ], $ordered);
    }
}
