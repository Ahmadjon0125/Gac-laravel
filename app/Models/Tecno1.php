<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecno1 extends Model
{
    protected $table = 'tecno1';

    protected $fillable = [
        'icon',
        'title_uz',
        'title_ru',
        'title_en'
    ];
}
