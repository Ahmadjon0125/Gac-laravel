<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    protected $fillable = [
        'phone',
        'mail',
        'address',
        'point',
        'map',
    ];
}
