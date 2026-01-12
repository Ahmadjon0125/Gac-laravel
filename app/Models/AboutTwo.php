<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTwo extends Model
{
    protected $table = 'about_two';

    protected $fillable = [
        'image1',
        'image2',
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
    ];
}
