<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics_array = config('comics');

    $comics_list = [
        'comics' => $comics_array
    ];
    // dd($comics_array);
    return view('home',$comics_list);
})->name('home');


Route::get('/about-comics',function() {

    return view('about');
})->name('about');