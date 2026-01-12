<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutThree extends Model
{
        protected $table = 'about_three';

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
    ];
}
