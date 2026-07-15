<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;


class EducationUnit extends Model
{

    use HasUuid, SoftDeletes;


    protected $fillable=[
        'name',
        'short_name',
        'description',
        'logo',
        'photo',
        'website'
    ];


    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }


    public function students()
    {
        return $this->hasMany(Student::class);
    }

}