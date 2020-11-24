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

Route::group(['middleware'=>'auth'], function(){
    Route::group(['prefix'=>'users'], function(){
        // list user
        Route::get('/', 'userController@index')->name('user.index');
        // create user
        Route::get('create', 'userController@create')->name('user.add');
        Route::post('create', 'userController@store')->name('user.store');

    });
});