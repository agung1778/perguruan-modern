<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentData extends Model
{
    protected $table = 'student_data';

    protected $fillable = [
        'education_unit_id',
        'class',
        'major',
        'male_count',
        'female_count',
        'total_count',
        'scholarship_tahfiz',
        'scholarship_akademik',
        'scholarship_non_akademik',
        'scholarship_yatim',
        'scholarship_yayasan',
        'academic_year',
    ];

    protected $casts = [
        'male_count' => 'integer',
        'female_count' => 'integer',
        'total_count' => 'integer',
        'scholarship_tahfiz' => 'integer',
        'scholarship_akademik' => 'integer',
        'scholarship_non_akademik' => 'integer',
        'scholarship_yatim' => 'integer',
        'scholarship_yayasan' => 'integer',
    ];

    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }
}