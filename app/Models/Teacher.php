<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\EducationUnit;


class Teacher extends Model
{
    use HasUuid,SoftDeletes;

    protected $fillable=[
        'education_unit_id',
        'name',
        'photo',
        'nip',
        'position'
    ];

    public function unit()
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }
        public function educationUnit(): BelongsTo
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }
}