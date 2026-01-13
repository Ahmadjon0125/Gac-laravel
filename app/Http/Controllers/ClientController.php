<?php

namespace App\Http\Controllers;

use App\Models\Guarantee;
use Illuminate\Http\Request;

class ClientController extends Controller
{
     public static function client(){
        $guarantees = Guarantee::all();
        return view('front.client', compact('guarantees'));
    }
}
