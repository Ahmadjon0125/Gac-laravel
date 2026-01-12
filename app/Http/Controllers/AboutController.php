<?php

namespace App\Http\Controllers;

use App\Models\AboutFour;
use App\Models\AboutOne;
use App\Models\AboutThree;
use App\Models\AboutTwo;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public static function about(){
      $aboutOne = AboutOne::first();
      $aboutTwo = AboutTwo::first();
      $aboutThree = AboutThree::first();
      $aboutFour = AboutFour::first();
    return view('front.about', compact('aboutOne','aboutTwo','aboutThree','aboutFour'));
   }
}
