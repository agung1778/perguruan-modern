<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;
class Testimonial extends Model
{

    use HasUuid;


    protected $fillable=[
    'name',
    'photo',
    'message'
    ];


}
