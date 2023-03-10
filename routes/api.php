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

Route::post('/login','ApiController@login')->name('user.login');
Route::post('/otp_verify','ApiController@otp_verify')->name('user.otp_verify');
Route::post('/register','ApiController@register')->name('user.register');
Route::middleware('auth:api')->group(function(){
    
});