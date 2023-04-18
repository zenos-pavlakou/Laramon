<?php

use Illuminate\Support\Facades\Route;


Route::get('/user-profiles', 'UserProfileController@index');
Route::get('/user-profiles/{id}', 'UserProfileController@show');
Route::put('/user-profiles/{id}', 'UserProfileController@update');
Route::delete('/user-profiles/{id}', 'UserProfileController@destroy');
Route::post('/user-profiles', 'UserProfileController@store');

