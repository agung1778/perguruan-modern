<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use App\Models\Ppdb;
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
    ];

    /**
     * Relasi ke siswa.
     */
    public function students(): HasMany
    {
        return $this->hasMany(
            Student::class,
            'education_unit_id'
        );
    }

    /**
     * Relasi ke guru dan karyawan.
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(
            Teacher::class,
            'education_unit_id'
        );
    }
    public function ppdbs()
    {
        return $this->hasMany(
            Ppdb::class,
            'education_unit_id'
        );
    }
}