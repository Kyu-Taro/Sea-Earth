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

Route::get('/err',function(){
    trigger_error("エラー",E_USER_ERROR);
});

//トップページルート
Route::get('/','MainController@index')->name('index');
//ログアウトルート
Route::get('/logout','MainController@logout');
//ログインルート
Route::post('/login','LoginController@login');
//投稿処理ルート
Route::resource('/text','TextController');
//ショップ処理ルート
Route::resource('/user','UserController');
//セッティングページルート
Route::get('/setting','MainController@setting')->name('setting');

Route::middleware('auth')->group(function(){
    //マイページルート
    Route::get('/mypage','MainController@mypage')->name('mypage');
    //投稿ページルート
    Route::get('/create','MainController@create')->name('create');
    //パス変更ルート
    Route::get('/pass_re','MainController@pass')->name('pass');
    //パス変更処理ルート
    Route::post('/pass_re','MainController@pass_re');
    //記事削除ルート
    Route::get('/delete','MainController@text_delete')->name('text_delete');
});

