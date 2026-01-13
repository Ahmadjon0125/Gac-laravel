<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecno5 extends Model
{
    protected $table = 'tecno5';

    protected $fillable = [

        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'images'
    ];

      protected $casts = [
        'images' => 'array',
    ];
}
