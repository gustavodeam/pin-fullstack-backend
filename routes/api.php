<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/
//Route::post('/set-person', [PersonController::class, 'store']);
Route::post('set-person', 'App\Http\Controllers\PersonController@store');
Route::get('person/{email}', 'App\Http\Controllers\PersonController@show');
Route::post('send-message', 'App\Http\Controllers\MessageController@store');