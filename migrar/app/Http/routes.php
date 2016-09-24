<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin','AdminController@admin_index');

Route::resource('admin_users', 'UsersController');

Route::resource('admin_login', 'AdminLoginController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('home', function(){
	if(Auth::guest()){

		return Redirect::to('auth/login');

	} else {
	echo "Home"; }
});


Route::get('/', function () {
    return view('welcome');
});
