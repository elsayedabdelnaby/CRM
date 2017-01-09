<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/forms', 'FormsController');
Route::resource('/usertypes', 'UserTypesController');
Route::resource('/utprivileges', 'UTPrivilegesController');

Route::resource('/countries', 'CountriesController');
Route::resource('/goverments', 'GovernmentsController');
Route::resource('/cities', 'CitiesController');
Route::resource('/areas', 'AreasController');

