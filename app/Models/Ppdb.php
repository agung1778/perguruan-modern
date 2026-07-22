<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ppdb extends Model
{
    use HasUuid, SoftDeletes;

    protected $fillable = [
        'education_unit_id',
        'title',
        'academic_year',
        'slug',
        'description',
        'requirements',
        'schedule',
        'registration_start',
        'registration_end',
        'registration_fee',
        'registration_url',
        'contact',
        'status',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'registration_start' => 'date',
            'registration_end' => 'date',
            'registration_fee' => 'decimal:2',
            'is_published' => 'boolean',
        ];
    }

    public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }

    public function scopePublished($query)
    {
        return $query
            ->where('is_published', true)
            ->where('status', 'published');
    }

    public function scopeActive($query)
    {
        return $query
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

    public function getIsOpenAttribute(): bool
    {
        if ($this->status !== 'published') {
            return false;
        }

        if (! $this->is_published) {
            return false;
        }

        if (
            $this->registration_start &&
            now()->lt($this->registration_start)
        ) {
            return false;
        }

        if (
            $this->registration_end &&
            now()->gt($this->registration_end)
        ) {
            return false;
        }

        return true;
    }
}