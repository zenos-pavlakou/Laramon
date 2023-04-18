<?php

use Illuminate\Support\Facades\Route;




Route::get('/electronic-devices', 'ElectronicDeviceController@index');
Route::get('/electronic-devices/{id}', 'ElectronicDeviceController@show');
Route::put('/electronic-devices/{id}', 'ElectronicDeviceController@update');
Route::delete('/electronic-devices/{id}', 'ElectronicDeviceController@destroy');
Route::post('/electronic-devices', 'ElectronicDeviceController@store');




Route::get('/hardware', 'HardwareController@index');
Route::get('/hardware/{id}', 'HardwareController@show');
Route::put('/hardware/{id}', 'HardwareController@update');
Route::delete('/hardware/{id}', 'HardwareController@destroy');
Route::post('/hardware', 'HardwareController@store');



















