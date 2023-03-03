<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LoginController@showLogin')->name('login');
Route::post('/login', 'LoginController@login')->name('admin.login');
Route::group(['middleware' => 'checkAdmin'], function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::get('/user/{user}/show', 'UserController@show')->name('user.show');
    /*Banner section routes starts here*/
    Route::get('/banners', 'BannerController@index')->name('banner.index');
    Route::get('/banners/add', 'BannerController@addBanner')->name('banner.add');
    Route::post('/banners/add', 'BannerController@store')->name('banner.store');
    Route::get('/banner/{id}/edit', 'BannerController@edit')->name('banner.edit');
    Route::put('/banner/{id}/edit', 'BannerController@update')->name('banner.update');
    Route::get('/banner/{id}/change-status', 'BannerController@changeStatus')->name('banner.change-status');
    /*Banner section routes ends here*/
    /*Complaint section routes starts here*/
    Route::get('/complaints', 'ComplaintController@index')->name('complaint.index');
    Route::post('/complaint/add', 'ComplaintController@store')->name('complaint.store');
    /*Complaint section routes ends here*/
    /*Government Links section routes starts here*/
    Route::get('/links', 'LinksController@index')->name('link.index');
    Route::get('/link/add', 'LinksController@addLink')->name('link.add');
    Route::post('/link/add', 'LinksController@store')->name('link.store');
    Route::get('/link/{id}/edit', 'LinksController@edit')->name('link.edit');
    Route::put('/link/{id}/edit', 'LinksController@update')->name('link.update');
    Route::get('/link/{id}/change-status', 'LinksController@changeStatus')->name('link.change-status');
    /*Government Links section routes ends here*/
    /*Media Sportlight section routes starts here*/
    Route::get('/media-sportlights', 'LinksController@mediaIndex')->name('media-sportlight.index');
    Route::get('/media-sportlight/add', 'LinksController@addMedia')->name('media-sportlight.add');
    Route::post('/media-sportlight/add', 'LinksController@storeMedia')->name('media-sportlight.store');
    Route::get('/media-sportlight/{id}/edit', 'LinksController@editMedia')->name('media-sportlight.edit');
    Route::put('/media-sportlight/{id}/edit', 'LinksController@updateMedia')->name('media-sportlight.update');
    Route::get('/media-sportlight/{id}/change-status', 'LinksController@changeStatusMedia')->name('media-sportlight.change-status');
    /*Media Sportlight section routes ends here*/
    /*Calendar section routes starts here*/
    Route::get('/calendars', 'CalendarController@index')->name('calendar.index');
    Route::get('/calendar/add', 'CalendarController@add')->name('calendar.add');
    Route::post('/calendar/add', 'CalendarController@store')->name('calendar.store');
    Route::get('/calendar/{id}/edit', 'CalendarController@edit')->name('calendar.edit');
    Route::put('/calendar/{id}/edit', 'CalendarController@update')->name('calendar.update');
    Route::get('/calendar/{id}/show', 'CalendarController@show')->name('calendar.show');
    Route::get('/calendar/{id}/change-status', 'CalendarController@changeStatus')->name('calendar.change-status');
    /*Calendar section routes ends here*/
    /*contacts section routes starts here*/
    Route::get('/contacts', 'CalendarController@contactIndex')->name('contact.index');
    Route::get('/contact/{id}/show', 'CalendarController@showContact')->name('contact.show');
    /*contacts section routes ends here*/
    /*Blogs section routes starts here*/
    Route::get('/blogs', 'BlogController@index')->name('blog.index');
    Route::get('/blog/add', 'BlogController@add')->name('blog.add');
    Route::post('/blog/store', 'BlogController@store')->name('blog.save');
    Route::put('/blog/{id?}/store', 'BlogController@store')->name('blog.store');
    Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
    Route::get('/blog/{id}/show', 'BlogController@show')->name('blog.show');
    Route::get('/blog/{id}/change-status', 'BlogController@changeStatus')->name('blog.change-status');
    /*Blogs section routes ends here*/
    /*Events section routes starts here*/
    Route::get('/events', 'EventController@index')->name('events.index');
    Route::get('/event/add', 'EventController@add')->name('event.add');
    Route::post('/event/add', 'EventController@store')->name('event.store');
    Route::get('/event/{id}/edit', 'EventController@edit')->name('event.edit');
    Route::put('/event/{id}/edit', 'EventController@update')->name('event.update');
    Route::get('/event/{id}/show', 'EventController@show')->name('event.show');
    Route::get('/event/{id}/change-status', 'EventController@changeStatus')->name('event.change-status');
    /*Events section routes ends here*/
    /*Egmore Data section routes starts here*/
    Route::get('/egmore-data', 'EgmoreDataController@index')->name('egmore.index');
    Route::get('/egmore-data/add', 'EgmoreDataController@add')->name('egmore.add');
    Route::post('/egmore-data/add', 'EgmoreDataController@store')->name('egmore.store');
    Route::get('/egmore-data/{id}/show', 'EgmoreDataController@show')->name('egmore.show');
    Route::get('/egmore-data/{id}/edit', 'EgmoreDataController@edit')->name('egmore.edit');
    Route::put('/egmore-data/{id}/edit', 'EgmoreDataController@update')->name('egmore.update');
    Route::get('/egmore/{id}/change-status', 'EgmoreDataController@changeStatus')->name('egmore.change-status');
    /*Egmore Data section routes ends here*/
});
Route::get('/logout', 'LoginController@logout')->name('user.logout');
Route::get('/import', 'LoginController@import')->name('user.import');
Route::get('/privacypolicy', 'LoginController@privacyPolicy')->name('user.privacy-policy');
