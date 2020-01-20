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

Route::get('/', 'TopController@index');
Route::get('/Mypage', 'AccountController@index');
Route::post('/logout', 'TopController@logout');
Route::get('demo', function () {
    return view('demotest');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
