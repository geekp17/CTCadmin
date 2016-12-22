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

Route::get('/lugger/edit', 'LuggerController@edit');
Route::get('/lugger/add', 'LuggerController@add');

Route::get('/clubber/add', 'ClubberController@add');

Route::post('/clubber/insert', 'ClubberController@insert');
