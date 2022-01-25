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
    return view('Initial.start');
})->name('initial.start');

Route::get('/admin', function () {
    return view('Admin.home.index');
})->name('admin.home.index');

Route::get('admin/comics', 'Admin\ComicController@index')->name('admin.comic.index');
Route::get('admin/comics/create', 'Admin\ComicController@create')->name('admin.comic.create');
Route::post('admin/comics', 'Admin\ComicController@store')->name('admin.comic.store');
Route::get('admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comic.show');
Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comic.edit');
Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comic.update');
Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comic.destroy');















