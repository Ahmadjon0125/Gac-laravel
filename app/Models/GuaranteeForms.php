<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuaranteeForms extends Model
{
    protected $fillable = [
        'text_uz','text_ru','text_en','company_name', 'region', 'address', 'employee_count', 'full_name', 'phone', 'additional_info'
    ];
}
