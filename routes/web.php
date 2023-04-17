<?php

use Illuminate\Support\Facades\Route;


// ==================== CRUD ROUTES FOR Foobar ====================
Route::get('/foobar', 'FoobarController@index');
Route::get('/foobar/{id}', 'FoobarController@show');
Route::put('/foobar/{id}', 'FoobarController@update');
Route::delete('/foobar/{id}', 'FoobarController@destroy');
Route::post('/foobar', 'FoobarController@store');
// ==================== END OF CRUD ROUTES FOR Foobar ====================

// ==================== CRUD ROUTES FOR UserInfoChangeRequest ====================
Route::get('/user-info-change-request', 'UserInfoChangeRequestController@index');
Route::get('/user-info-change-request/{id}', 'UserInfoChangeRequestController@show');
Route::put('/user-info-change-request/{id}', 'UserInfoChangeRequestController@update');
Route::delete('/user-info-change-request/{id}', 'UserInfoChangeRequestController@destroy');
Route::post('/user-info-change-request', 'UserInfoChangeRequestController@store');
// ==================== END OF CRUD ROUTES FOR UserInfoChangeRequest ====================

// ==================== CRUD ROUTES FOR Vehicle ====================
Route::get('/vehicle', 'VehicleController@index');
Route::get('/vehicle/{id}', 'VehicleController@show');
Route::put('/vehicle/{id}', 'VehicleController@update');
Route::delete('/vehicle/{id}', 'VehicleController@destroy');
Route::post('/vehicle', 'VehicleController@store');
// ==================== END OF CRUD ROUTES FOR Vehicle ====================
