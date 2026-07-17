<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasUuid;
class NewsCategory extends Model
{
    use HasUuid;

    protected $fillable=[
    'name'
    ];

    public function newsArticles()
    {
        return $this->hasMany(
            NewsArticle::class,
            'category_id'
        );
    }
    public function category()
    {
        return $this->belongsTo(
            NewsCategory::class,
            'category_id'
        );
    }
}
