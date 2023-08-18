<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */

/* Route::view('/', 'welcome')->name('welcome'); */
Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');


/* Route::get();
Route::put();
Route::delete();
Route::patch(); */