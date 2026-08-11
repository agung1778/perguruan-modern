<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasUuid;

    protected $fillable = [
        'title',
        'slug',
        'date',
        'location',
        'description',
        'is_active',
    ];

    protected $casts = [
        'date' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * Scope untuk mengambil agenda yang aktif.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * View yang digunakan oleh widget Filament.
     */
    protected static string $view = 'filament.widgets.upcoming-agenda';
}
