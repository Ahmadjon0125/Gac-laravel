<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public static function partner(){
        return view('front.partner');
    }
}
