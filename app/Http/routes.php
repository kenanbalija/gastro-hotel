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

Route::get('/', 'HomeController@index' );

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/rooms', 'HomeController@rooms');
Route::get('/events', 'HomeController@events');
Route::get('/photos', 'HomeController@photos');
Route::get('/contact', 'HomeController@contact');
Route::get('/services', 'HomeController@services');
