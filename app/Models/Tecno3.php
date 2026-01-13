<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecno3 extends Model
{
    protected $table = 'tecno3';

    protected $fillable = [

        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'speed',
        'time',
        'timeOne',
    ];
}
