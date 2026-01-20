<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advantages extends Model
{
    protected $table = 'advantages';

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'image',
    ];
}
