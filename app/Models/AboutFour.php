<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutFour extends Model
{
        protected $table = 'about_four';

    protected $fillable = [
        'img',
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
    ];
}
