<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;
class NewsArticle extends Model
{
    use HasUuid,SoftDeletes;

    protected $fillable=[
    'news_category_id',
    'title',
    'thumbnail',
    'content'
    ];

    public function category()
    {
        return $this->belongsTo(
            NewsCategory::class
        );
    }

}