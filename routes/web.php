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



Route::get('posts', 'Admin\ComicController@index');
Route::get('posts/create', 'Admin\ComicController@create');
Route::post('posts', 'Admin\ComicController@store');
Route::get('posts/{post}', 'Admin\ComicController@show');
Route::get('posts/{post}/edit', 'Admin\ComicController@edit');
Route::put('posts/{post}', 'Admin\ComicController@update');
Route::delete('posts/{post}', 'Admin\ComicController@destroy');





