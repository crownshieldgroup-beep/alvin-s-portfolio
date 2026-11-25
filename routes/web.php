<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/ventures', 'ventures')->name('ventures');
    Route::get('/foundation', 'foundation')->name('foundation');
    Route::get('/news', 'news')->name('news');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');

    Route::post('/contact', 'submitContact')->middleware('throttle:5,1')->name('contact.submit');
    Route::post('/subscribe', 'subscribe')->middleware('throttle:5,1')->name('subscribe');
});
