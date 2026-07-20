<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;

class Student extends Model
{
    use HasUuid;

    protected $fillable = [
        'education_unit_id',
        'name',
        'nis',
        'photo',
        'class',
        'major',
        'year',
    ];

    public function educationUnit()
    {
        return $this->belongsTo(EducationUnit::class);
    }
}