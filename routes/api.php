<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('country', 'Api\CountryController@index');
Route::get('country/{id}', 'Api\CountryController@show');
Route::post('country', 'Api\CountryController@store');
Route::put('country/{id}', 'Api\CountryController@update');
Route::delete('country/{id}', 'Api\CountryController@delete');
