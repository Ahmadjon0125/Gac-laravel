<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guarantee extends Model
{
    protected $table ='guarantee';

    protected $fillable = [
        'title_uz', 
        'title_ru', 
        'title_en', 
        'file_path', 
        'file_type', 
        'file_size',
    ];
}
