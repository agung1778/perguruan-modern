<?php

namespace App\Models;

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
     * Scope unit pendidikan aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Relasi ke data PPDB.
     */
    public function ppdbs(): HasMany
    {
        return $this->hasMany(
            Ppdb::class,
            'education_unit_id'
        );
    }

    /**
     * Relasi ke data siswa.
     */
    public function students(): HasMany
    {
        return $this->hasMany(
            StudentData::class,
            'education_unit_id'
        );
    }

    /**
     * Relasi ke jurusan.
     */
    public function majors(): HasMany
    {
        return $this->hasMany(
            Major::class,
            'education_unit_id'
        );
    }

    /**
     * Relasi ke guru.
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(
            Teacher::class,
            'education_unit_id'
        );
    }
}