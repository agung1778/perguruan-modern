<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasUuid, SoftDeletes;

    protected $fillable = [
        'education_unit_id',
        'name',
        'photo',
        'nisn',
        'gender',
        'birth_place',
        'birth_date',
        'batch',
        'major',
        'class',
        'status',
        'entry_year',
        'graduation_year',
        'description',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'entry_year' => 'integer',
        'graduation_year' => 'integer',
    ];

    /**
     * Relasi ke unit pendidikan.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Alias relasi unit pendidikan.
     */
    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Siswa aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Filter berdasarkan status.
     */
    public function scopeStatus($query, string $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Filter berdasarkan angkatan.
     */
    public function scopeBatch($query, string $batch)
    {
        return $query->where('batch', $batch);
    }
}