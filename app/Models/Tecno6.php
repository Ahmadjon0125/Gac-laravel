<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecno6 extends Model
{
    protected $table = 'tecno6';

    protected $fillable = [

        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'image'
    ];
}
