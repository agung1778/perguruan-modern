<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasUuid, SoftDeletes;

    protected $fillable = [
        'education_unit_id',
        'name',
        'photo',
        'nip',
        'gender',
        'birth_place',
        'birth_date',
        'position',
        'subject',
        'employment_status',
        'join_year',
        'bio',
        'is_active',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'join_year' => 'integer',
        'is_active' => 'boolean',
    ];

    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Alias untuk kompatibilitas dengan kode lama.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Scope guru yang masih aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope berdasarkan status kepegawaian.
     */
    public function scopeEmploymentStatus(
        $query,
        string $status
    ) {
        return $query->where(
            'employment_status',
            $status
        );
    }
}