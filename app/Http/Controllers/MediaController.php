<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Photos;
use App\Models\Videos;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public static function media(){
        $photos = Photos::first();
        $videos = Videos::all();
         $info = Infos::first();
        return view('front.media', compact('photos', 'videos','info'));
    }
}
