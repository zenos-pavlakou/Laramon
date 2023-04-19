<?php

use Illuminate\Support\Facades\Route;




Route::get('/examples', 'ExampleController@index');
Route::get('/examples/{id}', 'ExampleController@show');
Route::put('/examples/{id}', 'ExampleController@update');
Route::delete('/examples/{id}', 'ExampleController@destroy');
Route::post('/examples', 'ExampleController@store');

