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
Route::get('/login','UserController@showLogin');
Route::post('/login','UserController@doLogin');
Route::group(['middleware' => 'usersession'], function () {
    Route::get('/show/createbook','BookController@showCreateBookPage');
    Route::post('/create/book','BookController@create');
    Route::get('/show/book','BookController@showBooks');
    Route::get('/userLogout','UserController@userLogout');
});
