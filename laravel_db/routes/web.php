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

Route::get('/index','AllSqlQueryController@index');
Route::get('/singlerow','AllSqlQueryController@singlerow');
Route::get('/singlecolumn','AllSqlQueryController@singlecolumn');
Route::get('/pluck1','AllSqlQueryController@pluck1');
Route::get('/pluck2','AllSqlQueryController@pluck2');
