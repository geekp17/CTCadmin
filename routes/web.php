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
Route::get('/lugger', 'LuggerController@index')->middleware('auth');;
Route::get('/lugger/{id}/edit', 'LuggerController@edit')->middleware('auth');
Route::get('/lugger/add', 'LuggerController@add')->middleware('auth');
Route::post('/lugger/insert', 'LuggerController@insert')->middleware('auth');

Route::get('/clubber/add', 'ClubberController@add')->middleware('auth');
Route::post('/clubber/insert', "ClubberController@insert")->middleware('auth');
Route::post('/clubber/levelUp', "ClubberController@levelUp")->middleware('auth');

Route::get('/log/edit/{id}', 'LogController@edit')->middleware('auth');
Route::post('/log/insert', 'LogController@insert')->middleware('auth');
Route::get('/log', 'LogController@index')->middleware('auth');

Auth::routes();
