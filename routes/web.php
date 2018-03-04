<?php

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

Route::get('/', '\App\Admin\Controllers\HomeController@show_index')->name('home');
Route::get('/submitted', '\App\Admin\Controllers\HomeController@show_create')->name('create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
