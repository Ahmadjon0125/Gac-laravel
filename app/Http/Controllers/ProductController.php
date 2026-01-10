<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public static function product(){
    return view('front.product');
   }

   public static function productIn(){
    return view('front.productIn');
   }
}
