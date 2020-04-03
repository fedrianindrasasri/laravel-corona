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
    return view('user/index');
})->name('index');

Route::get('/berita', function() {
    return view('user/berita');
})->name('berita');

Route::get('/faq', function() {
    return view('user/faq');
})->name('faq');

Route::get('/infografik', function() {
    return view('user/infografik');
})->name('infografik');

Route::get('/kontak', function() {
    return view('user/kontak');
})->name('kontak');

Route::get('/rumahsakit', function() {
    return view('user/rumahsakit');
})->name('rumahsakit');



Auth::routes();


Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
