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
        'type',
        'photo',
        'nip',
        'nuptk',
        'gender',
        'birth_place',
        'birth_date',
        'position',
        'subject',
        'employment_status',
        'join_year',
        'is_active',
        'description',
        'bio',
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
     * Alias kompatibilitas dengan kode lama.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    /**
     * Scope tenaga pendidik aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope berdasarkan tipe.
     */
    public function scopeTeacher($query)
    {
        return $query->where('type', 'teacher');
    }

    /**
     * Scope berdasarkan tipe staff.
     */
    public function scopeStaff($query)
    {
        return $query->where('type', 'staff');
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

    /**
     * Mendapatkan label tipe tenaga pendidik.
     */
    public function getTypeLabelAttribute(): string
    {
        return match ($this->type) {
            'staff' => 'Karyawan / Staff',
            default => 'Guru',
        };
    }
}