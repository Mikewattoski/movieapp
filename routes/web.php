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

Route::get('/', 'moviecontroller@index')->name('movie.index');
Route::get('/mov/{movie}','moviecontroller@show')->name('movie.show');
Route::get('/tv', 'tvcontroller@index')->name('tv.index');
Route::get('/tv/{id}','tvcontroller@show')->name('tv.show');
Route::get('/actor','actorController@index')->name('actor.index');

Route::get('/actor/{actor}','actorController@show')->name('actor.show');
Route::get('/actor/page/{page?}','actorController@index');
Route::get('/mov/sh', function () {
    return view('show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
