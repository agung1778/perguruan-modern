<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;
class GalleryAlbum extends Model
{
    use HasUuid;

    protected $fillable=[
    'title',
    'description'
    ];

    public function photos()
    {
        return $this->hasMany(
            GalleryPhoto::class
        );
    }

}