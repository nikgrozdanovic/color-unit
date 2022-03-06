<?php

use App\Models\Color;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/colors', '\App\Http\Controllers\ColorController@index');
Route::post('/colors', '\App\Http\Controllers\ColorController@store');
Route::delete('/colors/{id}', '\App\Http\Controllers\ColorController@destroy');
