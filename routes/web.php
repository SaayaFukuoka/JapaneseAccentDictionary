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

Route::get('/words/{word}/edit_audio', 'WordController@editAudio')->name('words.edit_audio');
 
Route::patch('/words/{word}/edit_audio', 'WordController@updateAudio')->name('words.update_audio');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

