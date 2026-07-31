<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasUuid;

    protected $fillable = [
        'education_unit_id',
        'name',
        'short_name',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Unit pendidikan pemilik jurusan.
     */
    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id',
        );
    }

    /**
     * Data siswa berdasarkan jurusan.
     */
    public function students(): HasMany
    {
        return $this->hasMany(
            StudentData::class,
            'major_id','id'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Hanya jurusan aktif.
     */
    public function scopeActive($query)
    {
        return $query
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name');
    }
}