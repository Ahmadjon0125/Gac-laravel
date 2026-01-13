<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index() {

        $sliders = Slider::all();
           $products = Product::all();
        return view('front.index',compact('sliders','products'));
    }
}
