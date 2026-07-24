<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasUuids;

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