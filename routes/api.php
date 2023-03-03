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

Route::get('/wards','ApiController@wards')->name('wards');
Route::get('/pincodes','ApiController@pincodes')->name('pincodes');
Route::post('/login','ApiController@login')->name('user.login');
Route::post('/otp_send','ApiController@otp_send')->name('user.otp_send');
Route::post('/register','ApiController@register')->name('user.register');
Route::middleware('auth:api')->group(function(){
    Route::get('/banners','ApiController@banners')->name('user.banners');
    Route::get('/complaint','ApiController@complaint')->name('user.complaint');
    Route::post('/contact','ApiController@contact')->name('user.contact');
    Route::post('/calendars','ApiController@calendars')->name('user.calendars');
    Route::post('/month_calendars','ApiController@monthCalendars')->name('user.month_calendars');
    Route::post('/categories','ApiController@categories')->name('user.categories');
    Route::post('/egmore_infos','ApiController@egmoreInfos')->name('user.egmore_infos');
    Route::get('/blogs','ApiController@blogs')->name('user.blogs');
    Route::post('/events','ApiController@events')->name('user.events');
    Route::post('/government_links','ApiController@governmentLinks')->name('user.governmentLinks');
    Route::post('/media_spotlight','ApiController@mediaSpotlight')->name('user.mediaSpotlight');
});