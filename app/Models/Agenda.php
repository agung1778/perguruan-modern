<?php

namespace App\Models;
use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasUuid;

    protected $fillable=[
    'title',
    'date',
    'description'
    ];

}