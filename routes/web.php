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
    return view('home.index');
})->name('admin.home.index');

Route::get('comics', 'Admin\ComicController@index')->name('admin.comic.index');
Route::get('comics/create', 'Admin\ComicController@create')->name('admin.comic.create');
Route::post('comics', 'Admin\ComicController@store')->name('admin.comic.store');
Route::get('comics/{comic}', 'Admin\ComicController@show')->name('admin.comic.show');
Route::get('comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comic.edit');
Route::put('comics/{comic}', 'Admin\ComicController@update')->name('admin.comic.update');


/* ------ da completare ------- */









Route::delete('comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comic.destroy');





