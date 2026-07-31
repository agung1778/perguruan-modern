<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppdb extends Model
{
    use HasUuid, SoftDeletes;

    protected $fillable = [
        'education_unit_id',
        'title',
        'academic_year',
        'description',
        'requirements',
        'registration_link',
        'is_active',
        'schedule',
        'registration_start',
        'registration_end',
        'registration_fee',
        'registration_url',
        'contact',
        'status',
        'is_published',
    ];

    protected $casts = [
        'registration_start' => 'date',
        'registration_end' => 'date',
        'registration_fee' => 'decimal:2',
        'is_active' => 'boolean',
        'is_published' => 'boolean',
    ];

    public function educationUnit()
    {
        return $this->belongsTo(EducationUnit::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePublished($query)
    {
        return $query ->where('is_published', true);
    }

    public function scopeOpen($query)
    {
        return $query
            ->where('is_active', true)
            ->where('is_published', true)
            ->where('status', 'published')
            ->where(function ($query) {
                $query
                    ->whereNull('registration_start')
                    ->orWhereDate(
                        'registration_start',
                        '<=',
                        now()
                    );
            })
            ->where(function ($query) {
                $query
                    ->whereNull('registration_end')
                    ->orWhereDate(
                        'registration_end',
                        '>=',
                        now()
                    );
            });
    }
}
