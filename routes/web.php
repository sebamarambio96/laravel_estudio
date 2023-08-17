<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */

/* Route::view('/', 'welcome')->name('welcome'); */
Route::view('/about', 'landing.about')->name('about');
Route::view('/', 'landing.index')->name('index');


/* Route::get();
Route::put();
Route::delete();
Route::patch(); */