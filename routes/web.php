<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TecnologyController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [IndexController::class, 'index' ]);
        Route::get('/about', [AboutController::class, 'about'])->name('aboutPage');
        Route::get('/client', [ClientController::class, 'client'])->name('clientPage');
        Route::post('/clientForm', [ClientController::class, 'storeDealerApplication'])->name('clientFormPage');
        Route::get('/product', [ProductController::class, 'product'])->name('productPage');
        Route::get('/tecnology', [TecnologyController::class, 'tecnology'])->name('tecnologyPage');
        Route::get('/news', [NewsController::class, 'news'])->name('newsPage');
        Route::get('/media', [MediaController::class, 'media'])->name('mediaPage');
        Route::get('/partner', [PartnerController::class, 'partner'])->name('partnerPage');
        Route::get('/contact', [ContactController::class, 'contact'])->name('contactPage');
        Route::get('/product/{id}/{slug}', [ProductController::class, 'productIn'])->name('productInPage');
        Route::get('/news/{id}/{slug}', [NewsController::class, 'newsIn'])->name('newsInPage');
        Route::post('/feedback-store', [FeedbackController::class, 'store'])->name('feedback.store');
    }
);
