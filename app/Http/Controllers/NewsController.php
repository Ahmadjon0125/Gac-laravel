<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
   public static function news(){
    return view('front.news');
   }

   public static function newsIn(){
    return view('front.newsIn');
   }
}
