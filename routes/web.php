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

Route::get('/', 'WordController@index');

Route::get('/words/search', 'WordController@search')->name('words.search');

Route::get('/words/category/{category}', 'WordController@category')->name('words.category');

Route::get('/words/hiragana/{char}', 'WordController@hiragana')->name('words.hiragana');

Route::resource('words', 'WordController');


Route::resource('likes', 'LikeController')->only([
    'index', 'store', 'destroy'
  ]);

Route::patch('/words/{word}/toggle_like', 'WordController@toggleLike')->name('words.toggle_like');

Auth::routes();

