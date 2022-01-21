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



Route::get('posts', 'Admin\ComicController@index')->name('admin.comic.index');
Route::get('posts/create', 'Admin\ComicController@create')->name('admin.comic.create');
Route::post('posts', 'Admin\ComicController@store')->name('admin.comic.store');

Route::get('posts/{post}', 'Admin\ComicController@show')->name('admin.comic.show');
Route::get('posts/{post}/edit', 'Admin\ComicController@edit')->name('admin.comic.edit');
Route::put('posts/{post}', 'Admin\ComicController@update')->name('admin.comic.update');
Route::delete('posts/{post}', 'Admin\ComicController@destroy')->name('admin.comic.destroy');





