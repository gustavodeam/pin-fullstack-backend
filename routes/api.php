<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('person/{email}', 'App\Http\Controllers\PersonController@show');
Route::post('send-message', 'App\Http\Controllers\MessageController@store');
