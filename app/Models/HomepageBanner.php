<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Concerns\HasUuid;



class HomepageBanner extends Model
{


use HasUuid;


protected $fillable=[

'title',

'description',

'image',

'button_text',

'button_link',

'is_active'

];

protected static function booted()
{
    static::saved(function () {

        cache()->forget('homepage');

    });

    static::deleted(function () {

        cache()->forget('homepage');

    });
}
}