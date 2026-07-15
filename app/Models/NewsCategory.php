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

    public function articles()
    {
        return $this->hasMany(
            NewsArticle::class
        );
    }
}
