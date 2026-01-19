<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
  protected $table ='partners';
      protected $fillable = [
        'text_uz',
        'text_ru',
        'text_en',
        'icons',
    ];

    protected $casts = ['icons' => 'array'];
}
