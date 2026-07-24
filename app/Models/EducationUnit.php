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
     * Relasi ke data siswa.
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Relasi ke data guru.
     */
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }

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
        return $query->where('is_active', true);
    }
}