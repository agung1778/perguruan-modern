<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;


class WebsiteSetting extends Model
{

    use HasUuid;


    protected $fillable = [

        'school_name',

        'logo',
        'favicon',

        'about',
        'history',

        'vision',
        'mission',

        'address',
        'phone',
        'email',

        'google_maps',

        'facebook',
        'instagram',
        'youtube',

        'meta_description',

    ];

}