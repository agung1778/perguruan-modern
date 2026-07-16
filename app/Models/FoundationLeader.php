<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Concerns\HasUuid;



class FoundationLeader extends Model
{


use HasUuid, SoftDeletes;



protected $fillable=[

'name',

'photo',

'position',

'period',

'message',

'is_active'

];

public function scopeActive($query)
{
    return $query->where('is_active', true);
}

}