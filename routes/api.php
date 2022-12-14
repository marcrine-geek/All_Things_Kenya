<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;

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

// Route::get('login', 'App\Http\Controllers\AuthController@showLogin');

Route::post('register', 'App\Http\Controllers\PassportAuthController@register');
Route::post('login', 'App\Http\Controllers\PassportAuthController@login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::get('/get-user', 'App\Http\Controllers\PassportAuthController@userInfo');
});
