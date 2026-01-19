<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Tecno1;
use App\Models\Tecno2;
use App\Models\Tecno3;
use App\Models\Tecno4;
use App\Models\Tecno5;
use App\Models\Tecno6;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    public static function tecnology(){
        $tecno1 = Tecno1::all();
        $tecno2 = Tecno2::first();
        $tecno3 = Tecno3::first();
        $tecno4 = Tecno4::all();
        $tecno5 = Tecno5::first();
        $tecno6 = Tecno6::first();
         $info = Infos::first();
        return view('front.tecnology', compact('tecno1','tecno2','tecno3','tecno4', 'tecno5','tecno6','info'));
    }
}
