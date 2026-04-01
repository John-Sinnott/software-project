<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name',
        'description',
        'article_full',
        'date',
        'latitude',
        'longitude',
        'category_id',
        'user_id',
    ];

    protected $casts = [
        'chart_data' => 'array',
    ];
}
