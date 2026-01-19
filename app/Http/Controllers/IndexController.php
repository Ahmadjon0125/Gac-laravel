<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\News;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index()
    {

        $sliders = Slider::all();
        $products = Product::all();
        $info = Infos::first();
        $news = News::all();
        return view('front.index', compact('sliders', 'products', 'info', 'news'));
    }
}
