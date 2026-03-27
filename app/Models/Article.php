<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name',
        'description',
        'date',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'chart_data' => 'array',
    ];
}
