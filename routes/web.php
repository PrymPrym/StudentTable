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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students','studentController@index');
Route::post('/students','studentController@save');
Route::get('/students/add','studentController@add');
Route::get('/students/edit/{id}','studentController@edit');
Route::post('/students/sort','studentController@sort');
Route::post('/students/edit/{id}','studentController@update');
Route::post('/students/find','studentController@find');
Route::delete('/students/delete/{id}','studentController@delete');


