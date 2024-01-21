<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//"characters" page link
Route::get('/', function () {
    return view('characters');
})->name('characters');

//"comics" page link
Route::get('comics', function () {
    return view('comics', config('data'));
})->name('comics');

//"movies" page link
Route::get('movies', function () {
    return view('movies');
})->name('movies');

//"tv" page link
Route::get('tv', function () {
    return view('tv');
})->name('tv');

//"games" page link
Route::get('games', function () {
    return view('games');
})->name('games');

//"collectibles" page link
Route::get('collectibles', function () {
    return view('collectibles');
})->name('collectibles');

//"videos" page link
Route::get('videos', function () {
    return view('videos');
})->name('videos');

//"fans" page link
Route::get('fans', function () {
    return view('fans');
})->name('fans');

//"news" page link
Route::get('news', function () {
    return view('news');
})->name('news');

//"shop" page link
Route::get('shop', function () {
    return view('shop');
})->name('shop');
