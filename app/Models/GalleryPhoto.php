<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;

class GalleryPhoto extends Model
{
    use HasUuid;

    protected $fillable = [
        'gallery_album_id',
        'photo',
    ];

    public function album()
    {
        return $this->belongsTo(
            GalleryAlbum::class,
            'gallery_album_id'
        );
    }
}