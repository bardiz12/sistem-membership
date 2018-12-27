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

Route::get('/home', 'HomeController@index')->name('home')->middleware("complete.profile");

Route::group(['prefix'=>'profile', 'middleware' => ['auth']], function () {
    Route::get('/edit','ProfileController@edit');
    Route::post('/edit','ProfileController@saveEdit');
});

Route::group(['prefix'=>'admin', 'middleware'=>["auth","role:admin"]],function(){

    Route::get('/',function(){
        dd(Auth::user());
    });
});

