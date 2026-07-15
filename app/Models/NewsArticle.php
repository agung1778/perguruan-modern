<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;
class NewsArticle extends Model
{
    use HasUuid,SoftDeletes;

    protected $fillable = [

    'title',
    'slug',
    'thumbnail',
    'content',
    'category_id',
    'status'

    ];

    public function category()
    {
        return $this->belongsTo(
            NewsCategory::class
        );
    }

}