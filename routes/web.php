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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/forms', 'FormsController');
Route::get('/forms/{id}/destroy', 'FormsController@destroy');
Route::resource('/modules', 'ModulesController');
Route::get('/modules/{id}/destroy', 'ModulesController@destroy');
Route::resource('/usertypes', 'UserTypesController');
Route::resource('/utprivileges', 'UTPrivilegesController');

Route::resource('/countries', 'CountriesController');
Route::get('/countries/{id}/destroy', 'CountriesController@destroy');

Route::resource('/governorates', 'GovernoratesController');
Route::get('/governorates/{id}/destroy', 'GovernoratesController@destroy');

Route::resource('/cities', 'CitiesController');
Route::get('/cities/{id}/destroy', 'CitiesController@destroy');

Route::resource('/areas', 'AreasController');
Route::get('/areas/{id}/destroy', 'AreasController@destroy');
