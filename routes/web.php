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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin-signin', 'AuthController@login')->name('auth.login');

Route::post('/admin-signin', 'AuthController@signin')->name('try.login');

Route::get('property', 'HomeController@property')->name('property');

Route::group(['prefix' => 'admin', 'middleware'=> 'admin'], function(){
    Route::get('/dashboard', 'AuthController@dashboard')->name('admin.dashboard');


    Route::resource('user', 'UserController');
    Route::resource('slide', 'SliderController');
    Route::resource('property', 'PropertyController');
    Route::get('property/pic/pop/{unid}', 'PropertyController@popPic')->name('property.image.pop');

    Route::resource('location', 'LocationController');

    Route::post('app/logout','AuthController@logout')->name('app.logout');
});
