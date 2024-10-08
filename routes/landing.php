<?php

use App\Http\Controllers\Landingpage\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('about-us', function(){
    return view('landing.about-us');
})->name('about-us');

Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.detail');
Route::get('news', [NewsController::class, 'index'])->name('news');

Route::get('testimoni', function(){
    return view('landing.testimoni');
})->name('testimoni');

Route::get('contact-us', function(){
    return view('landing.contact-us');
})->name('contact-us');

Route::get('package', function(){
    return view('landing.package');
})->name('package');
