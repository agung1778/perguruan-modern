<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;
class WebsiteSetting extends Model
{
    use HasUuid;

    protected $fillable=[
        'school_name',
        'logo',
        'phone',
        'email',
        'address',
        'social_media'
    ];


}
