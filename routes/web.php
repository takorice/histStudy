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

Route::get('/home', 'HomeController@index')->name('home');
//2019.05.06 add
// ログインURL
//Route::get('auth/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('auth/twitter', 'Auth\TwitterAuthController@redirectToProvider');
// コールバックURL
Route::get('auth/twitter/callback', 'Auth\TwitterAuthController@handleProviderCallback');
// ログアウトURL
Route::get('auth/twitter/logout', 'Auth\TwitterAuthController@logout');
