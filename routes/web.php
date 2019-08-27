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

//Authルート
Auth::routes();

//トップページルート
Route::get('/index','MainController@index')->name('index');
//ログアウトルート
Route::get('/logout','MainController@logout');
//ログインルート
Route::post('/login','LoginController@login');
//マイページルート
Route::get('/mypage','MainController@mypage')->name('mypage');
