<?php

use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contacts');
    Route::get('services', 'services')->name('services');
    Route::get('portfolio', 'portfolio')->name('portfolio');
//    Route::get('blog', 'blog')->name('blog');
//    Route::get('blog/{slug}', 'blog')->name('blog');
});
