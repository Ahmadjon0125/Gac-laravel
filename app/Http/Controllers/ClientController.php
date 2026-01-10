<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
     public static function client(){
        return view('front.client');
    }
}
