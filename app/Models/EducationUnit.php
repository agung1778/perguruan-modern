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
    protected function getData(): array
    {
        $units = EducationUnit::withCount('teachers')->get();

        return [

            'datasets' => [

                [

                    'label' => 'Guru',

                    'data' => $units
                        ->pluck('teachers_count')
                        ->toArray(),

                ],

            ],

            'labels' => $units
                ->pluck('name')
                ->toArray(),

        ];
    }
    protected function getType(): string
    {
        return 'bar';
    }
}