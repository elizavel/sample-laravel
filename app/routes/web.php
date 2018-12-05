<?php

use App\Http\Controllers\ToDoController;

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

//Route::get('/','ToDoController@index');
//Route::post('/create','ToDoController@create')->name('create');
//Route::get('/update/{id}','ToDoController@update')->name('update');
//Route::get('/delete/{id}','ToDoController@delete')->name('delete');

Route::get('/','MultisysController@index');
Route::get('/billers','MultisysController@billers')->name('billers');
Route::get('/rules/{merchant_id}','MultisysController@rules')->name('rules');
