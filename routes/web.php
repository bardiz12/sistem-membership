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
Route::get('/cek', function () {
    return view('member.profiles');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware("complete.profile");

Route::group(['prefix'=>'profile', 'middleware' => ['auth']], function () {
    Route::get('/edit','ProfileController@edit');
    Route::get('/photo','ProfileController@photo')->name('profile.photos');
    Route::get('/reset','ProfileController@reset');
    Route::post('/edit','ProfileController@saveEdit');
    Route::patch('/editphoto/{id}','ProfileController@editPhoto')->name('profile.photo');
});

Route::group(['prefix'=>'member', 'middleware'=>["auth","role:member"]],function(){

    Route::get('/','HomeController@home');
});

Route::group(['prefix'=>'admin', 'middleware'=>["auth","role:admin"]],function(){

    Route::get('/',function(){
        dd(Auth::user());
    });
});

