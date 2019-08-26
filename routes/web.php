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

Auth::routes();

Route::get('/index','MainController@index')->name('index');
Route::get('/logout','MainController@logout');
Route::post('/login','LoginController@login');
Route::get('/mypage','MainController@mypage')->name('mypage');
