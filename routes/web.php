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
Route::get('/task/{id}', "TaskController@index");
Route::get('/', 'GroupController@index');
Route::post('/task', "TaskController@store");
Route::put('/list/update/{id}', "GroupController@update");
Route::put('/task/{id}', "TaskController@update");
Route::get('/list/edit/{id}', 'GroupController@edit');
Route::post('/item', "GroupController@store");
Route::delete('/list/{id}', "GroupController@destroy");
Route::delete('/task/{id}', "TaskController@destroy");