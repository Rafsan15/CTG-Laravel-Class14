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


//Route::get('/UserDashboard','UserController@Dashboard');

Route::get('/user','UserRegisterController@index');
Route::post('/user','UserRegisterController@register')->name('user.register');