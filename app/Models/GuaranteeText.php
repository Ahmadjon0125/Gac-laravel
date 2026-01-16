<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuaranteeText extends Model
{
    protected $table = 'guarantee_text';

    protected $fillable = [
        'text_uz',
        'text_ru',
        'text_en',
    ];
}
