<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public static function contact() {
        $info = Infos::first();
        return view('front.contact', compact('info'));
    }
}
