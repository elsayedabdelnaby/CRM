<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/countries', 'APICountriesController@index');
Route::get('/countries/{id}', 'APICountriesController@show');
Route::get('/countries/{id}/governorates', 'APICountriesController@governorates');
Route::delete('/countries/{id}', 'APICountriesController@destroy');
Route::put('/countries/{id}', 'APICountriesController@update');
Route::post('/countries', 'APICountriesController@store');

Route::get('/governorates', 'APIGovernoratesController@index');
Route::get('/governorates/{id}', 'APIGovernoratesController@show');
Route::delete('/governorates/{id}', 'APIGovernoratesController@destroy');
Route::put('/governorates/{id}', 'APIGovernoratesController@update');
Route::post('/governorates', 'APIGovernoratesController@store');
Route::get('/governorates/{id}/cities', 'APIGovernoratesController@cities');