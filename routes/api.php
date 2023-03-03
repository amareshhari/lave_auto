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
Route::post('/otp_send','ApiController@otp_send')->name('user.otp_send');
Route::post('/register','ApiController@register')->name('user.register');
Route::post('/otp_verify','ApiController@otp_verify')->name('user.otp_verify');
Route::middleware('auth:api')->group(function(){
    
});