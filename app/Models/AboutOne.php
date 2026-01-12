<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutOne extends Model
{
    protected $table = 'about_one';

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'title2_uz',
        'title2_ru',
        'title2_en',
        'text_uz',
        'text_ru',
        'text_en',
    ];
}
