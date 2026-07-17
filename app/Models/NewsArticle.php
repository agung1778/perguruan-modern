<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\HasUuid;
use App\Models\NewsCategory;
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
            NewsCategory::class,
            'category_id'
        );
    }
    public function scopePublished($query)
    {
        return $query

            ->where('status','published');
    }
}