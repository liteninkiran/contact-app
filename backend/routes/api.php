<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', 'App\Http\Controllers\ContactController@index');
Route::get('/contacts/{id}', 'App\Http\Controllers\ContactController@show');
Route::post('/contacts', 'App\Http\Controllers\ContactController@store');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@delete');
