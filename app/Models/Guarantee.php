<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guarantee extends Model
{
    protected $table = 'guarantee';

    protected $fillable = [
        'text_uz',
        'text_ru',
        'text_en',
        'files',
    ];

    protected $casts = ['files' => 'array'];
}
