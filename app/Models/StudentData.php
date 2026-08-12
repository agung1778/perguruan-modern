<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentData extends Model
{
    use HasUuid;

    protected $table = 'student_data';

    protected $fillable = [
        'education_unit_id',
        'major_id',
        'major',
        'academic_year',
        'generation',
        'male_count',
        'female_count',
        'total_count',
        'scholarship_tahfiz',
        'scholarship_akademik',
        'scholarship_non_akademik',
        'scholarship_yatim',
        'scholarship_yayasan',
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

    /**
     * Relasi ke unit pendidikan.
     */
    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Relasi ke jurusan.
     *
     * major_id boleh NULL untuk unit
     * seperti TK, SD, atau SMP.
     */
    public function major(): BelongsTo
    {
        return $this->belongsTo(
            Major::class,
            'major_id'
        );
    }

    /**
     * Nama jurusan yang aman ditampilkan,
     * baik dari relasi major_id maupun data lama.
     */
    public function getMajorNameAttribute(): ?string
    {
        $major = null;

        if ($this->relationLoaded('major')) {
            $major = $this->getRelation('major');
        } elseif (! blank($this->major_id)) {
            $major = $this->major()->first();
        }

        if ($major instanceof Major) {
            return $major->name;
        }

        return $this->getAttribute('major');
    }

    /**
     * Total seluruh penerima beasiswa.
     */
    public function getTotalScholarshipAttribute(): int
    {
        return
            (int) $this->scholarship_tahfiz
            + (int) $this->scholarship_akademik
            + (int) $this->scholarship_non_akademik
            + (int) $this->scholarship_yatim
            + (int) $this->scholarship_yayasan;
    }
}