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


Route::get('/about-comics/{id}',function($id) {
    $comics_array = config('comics');

    $comic_to_show=false;

    foreach($comics_array as $comic){
        if($comic['id']==$id){
            $comic_to_show = $comic;
        }
    }

    $data =[
        'comic_info' => $comic_to_show
    ];


    return view('about',$data);
})->name('about');