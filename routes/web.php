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

Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/search', 'DashboardController@search')->middleware('auth');

Route::group(['prefix'=>'dashboard','middleware'=>['auth']],function(){
    Route::get('/event/register/{id}','EventController@register');
    Route::get('/event/registered','EventController@myEvent');
});

Route::get('/cek', function () {
    return view('auth2.register');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware("complete.profile");

Route::group(['prefix'=>'profile', 'middleware' => ['auth']], function () {
    Route::get('/edit','ProfileController@edit');
    Route::get('/photo','ProfileController@photo')->name('profile.photos');
    Route::get('/reset','ProfileController@reset');
    Route::post('/edit','ProfileController@saveEdit');
    Route::post('/update_password','ProfileController@passwordUpdate');
    Route::patch('/editphoto/{id}','ProfileController@editPhoto')->name('profile.photo');
});

Route::group(['prefix'=>'member', 'middleware'=>["auth"]],function(){
    Route::get('/','HomeController@home');
});

Route::group(['prefix'=>'admin', 'middleware'=>["auth","role:admin"]],function(){
    Route::get('/',function(){
        dd(Auth::user());
    });
});

