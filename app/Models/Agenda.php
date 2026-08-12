<?php

namespace App\Models;
use App\Models\Concerns\HasUuid;
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
    'is_active'

    ];
    protected $casts = [

    'date'=>'date'

    ];
    public function scopeActive($query)
    {
        return $query

            ->where('is_active',true);
    }
    protected static string $view = 'filament.widgets.upcoming-agenda';
}