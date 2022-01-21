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


Route::get('posts', 'Admin\PostController@index');
Route::get('posts/create', 'Admin\PostController@create');
Route::post('posts', 'Admin\PostController@store');
Route::get('posts/{post}', 'Admin\PostController@show');
Route::get('posts/{post}/edit', 'AdminnPostController@edit');
Route::put('posts/{post}', 'Admin\PostController@update');
Route::delete('posts/{post}', 'Admin\PostController@destroy');





