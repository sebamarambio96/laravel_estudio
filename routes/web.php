<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/* Route::get('/', function () {
    return view('welcome');
});
 */

/* Route::view('/', 'welcome')->name('welcome'); */

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/product/{pid?}', [UserController::class, 'create'])->name('user.create');


/* Route::get();
Route::put();
Route::delete();
Route::patch(); */