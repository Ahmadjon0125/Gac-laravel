<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
 public static function news()
   {
      $news = News::all();
       $info = Infos::first();
      return view('front.news', compact('news','info'));
   }

   public function newsIn($id, $slug)
   {
      $new = News::findOrFail($id);

      $locale = app()->getLocale();

      $currentLocaleSlug = $new->{'slug_' . $locale};


      if ($slug !== $currentLocaleSlug) {
         return redirect()->route('newsPage', [
            'id' => $new->id,
            'slug' => $currentLocaleSlug
         ]);
      }

       $info = Infos::first();

      return view('front.newsIn', compact('new','info'));
   }
}
