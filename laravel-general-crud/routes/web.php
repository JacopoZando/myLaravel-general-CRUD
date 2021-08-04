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

Route::get('/', 'MainController@home')
-> name('home');

Route::get('/show/{id}', 'MainController@show')
-> name('show');

Route::get('/create/', 'MainController@create')
-> name('create');

Route::post('/store/', 'MainController@store')
-> name('store');

Route::get('/edit/{$id}', 'MainController@edit')
-> name('edit');

Route::post('/update/{$id}', 'MainController@update')
-> name('update');

Route::get('/delete/{$id}', 'MainController@delete')
-> name('delete');