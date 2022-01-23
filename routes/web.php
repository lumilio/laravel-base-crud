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


/* ------ da completare ------- */



Route::get('comics/{post}', 'Admin\ComicController@show')->name('admin.comic.show');



Route::get('comics/{post}/edit', 'Admin\ComicController@edit')->name('admin.comic.edit');
Route::put('comics/{post}', 'Admin\ComicController@update')->name('admin.comic.update');

Route::delete('comics/{post}', 'Admin\ComicController@destroy')->name('admin.comic.destroy');





