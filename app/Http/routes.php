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


Route::get('/', function () {
    $tasks = SWeg\Task::all();

    return View::make('welcome')->with('tasks',$tasks);
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



Route::get('admin','AdminController@admin_index');
Route::get('admin/nopermision','AdminController@admin_error');

Route::resource('admin_users', 'UsersController');
Route::resource('admin/kunden', 'KundenController');
Route::resource('admin_rech', 'RechController');

Route::resource('admin_rechval', 'rechval');

Route::post('auth/login', 'Auth\AuthController@postLogin');


