<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();
Route::get('/', 'HomeController@index' );
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/rooms', 'HomeController@rooms');
Route::get('/events', 'HomeController@events');

Route::get('/photos', 'HomeController@photos');
Route::get('/photos/apartmants', 'PhotoController@apartmants');
Route::get('/photos/restaurants', 'PhotoController@restaurants');
Route::get('/photos/exterior', 'PhotoController@exterior');

Route::get('/contact', 'HomeController@contact');
Route::get('/services', 'HomeController@services');


Route::get('/rooms/standard', 'RoomController@standard');
Route::get('/rooms/superior', 'RoomController@superior');
Route::get('/rooms/deluxe', 'RoomController@deluxe');
