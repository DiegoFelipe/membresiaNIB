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

Route::get('get-all-ministerios', 'MinisteriosController@getAll');
Route::get('/{path?}', function () {
    return view('welcome');
});


Route::resource('membros', 'MembroController');
