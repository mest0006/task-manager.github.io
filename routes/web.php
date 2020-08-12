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


Auth::routes();
Route::get('/edit', 'TaskController@index');
Route::get('/', 'GroupController@index');
Route::get('/list/edit/{id}', "GroupController@edit");
Route::post('/item', "GroupController@store");


Route::delete('/item/{id}', "GroupController@destroy");