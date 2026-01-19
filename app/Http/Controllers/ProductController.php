<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public static function product()
   {
      $products = Product::all();
      $info = Infos::first();
      return view('front.product', compact('products', 'info'));
   }

   public function productIn($id, $slug)
   {
      $product = Product::findOrFail($id);

      $locale = app()->getLocale();

      $currentLocaleSlug = $product->{'slug_' . $locale};


      if ($slug !== $currentLocaleSlug) {
         return redirect()->route('productPage', [
            'id' => $product->id,
            'slug' => $currentLocaleSlug
         ]);
      }
      $info = Infos::first();
      return view('front.productIn', compact('product', 'info'));
   }
}
