<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Concerns\HasUuid;



class FoundationOrganization extends Model
{


use HasUuid,SoftDeletes;



protected $fillable=[

'name',

'photo',

'position',

'order',

'is_active'

];
public function scopeOrdered($query)
{
    return $query

        ->orderBy('order');
}

public function scopeActive($query)
{
    return $query->where('is_active', true);
}

}