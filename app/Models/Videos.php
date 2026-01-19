<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable = [
        'link',
        'poster',
        'title_uz',
        'title_ru',
        'title_en',
    ];
}
