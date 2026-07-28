<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EducationUnit extends Model
{
    use HasUuid, SoftDeletes;

    protected $fillable = [
        'name',
        'short_name',
        'description',
        'logo',
        'photo',
        'website',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relasi ke data PPDB.
     */
    public function ppdbs(): HasMany
    {
        return $this->hasMany(Ppdb::class);
    }

    /**
     * Scope unit aktif.
     */
    public function scopeActive($query)
    {
        return EducationUnit::query()
            ->withCount([
                'students',
                'teachers',
            ])
            ->orderBy('name')
            ->get();
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'education_unit_id');
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'education_unit_id');
    }
}