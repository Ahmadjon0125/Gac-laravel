<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public static function partner(){
        $partner = Partners::first();
         $info = Infos::first();
        return view('front.partner', compact('partner','info'));
    }
}
