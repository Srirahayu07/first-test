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

Route::get('/', 'TodosController@index1');
Route::get('todos', 'TodosController@index');
Route::get('crud', 'TodosController@crud');
Route::get('todos/{todo}', 'TodosController@show');
Route::get('new-todos', 'TodosController@create');
Route::post('store-todos','TodosController@store');
Route::get('todos/{todo}/edit', 'TodosController@edit');
Route::post('todos/{todo}/update-todos','TodosController@update');
Route::get('todos/{todo}/delete', 'TodosController@delete');
Route::get('admin','AdminController@index');
Route::get('todos/{todo}/completed','TodosController@completed');
Route::get('timeline','TodosController@timeline');
Route::get('timeline/{todo}/profile', 'TodosController@profile');
Route::get('timeline/{todo}/detail_news', 'TodosController@detail_news');
Route::get('/timeline/cari','TodosController@cari');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

