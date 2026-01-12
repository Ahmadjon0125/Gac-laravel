<?php

namespace App\Http\Controllers;

use App\Models\Tecno1;
use App\Models\Tecno2;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    public static function tecnology(){
        $tecno1 = Tecno1::all();
        $tecno2 = Tecno2::first();
        return view('front.tecnology', compact('tecno1','tecno2'));
    }
}
