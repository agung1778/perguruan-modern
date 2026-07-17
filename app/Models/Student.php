<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;
class Student extends Model
{
    use HasUuid,SoftDeletes;

    protected $fillable=[
    'education_unit_id',
    'name',
    'nisn',
    'class'
    ];

    public function unit()
    {
        return $this->belongsTo(
            EducationUnit::class,
            'education_unit_id'
        );
    }
}
