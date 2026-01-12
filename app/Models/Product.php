<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'mainTitle_uz',
        'mainTitle_ru',
        'mainTitle_en',
        'mainText_uz',
        'mainText_ru',
        'mainText_en',
        'mainBg',
        'mainImg',
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'slides1',
        'slides2', 
        'lastTitle_uz',
        'lastTitle_ru',
        'lastTitle_en',
        'lastText_uz',
        'lastText_ru',
        'lastText_en',
        'image',
        'slug_uz',
        'slug_ru',
        'slug_en',
    ];

    protected $casts = [
        // JSON ustunlari migratsiyada JSON turi sifatida belgilangan bo'lishi shart
        'slides1' => 'array', 
        'slides2' => 'array',
    ];
}
