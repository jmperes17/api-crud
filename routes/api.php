<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('users','App\Http\Controllers\UserController@index');

Route::post('users','App\Http\Controllers\UserController@store');

Route::get('users/{id}','App\Http\Controllers\UserController@show');

Route::put('users/{id}','App\Http\Controllers\UserController@update');

Route::delete('users/{id}','App\Http\Controllers\UserController@destroy');
