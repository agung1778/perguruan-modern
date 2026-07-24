<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryPhoto extends Model
{
    use HasUuid;

    protected $fillable = [
        'gallery_album_id',
        'photo',
        'caption',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    public function album()
    {
        return $this->belongsTo(
            GalleryAlbum::class,
            'gallery_album_id'
        );
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}