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
Route::get('/home/edit/{id}', 'HomeController@edit');
Route::post('home/save/{id}', 'HomeController@save');

Route::get('/about', 'HomeController@about');
Route::get('/rooms', 'HomeController@rooms');
Route::get('/rooms/edit/{id}', 'HomeController@rooms_edit');
Route::post('/rooms/save/{id}', 'HomeController@rooms_save');

Route::get('/events', 'HomeController@events');
Route::get('/events/edit/{id}', 'HomeController@events_edit');
Route::post('/events/save/{id}', 'HomeController@events_save');


Route::get('/photos', 'HomeController@photos');
Route::get('/photos/apartmants', 'PhotoController@apartmants');
Route::get('/photos/apartmants/add', 'PhotoController@apartmants_add');
Route::post('/photos/apartmants/save', 'PhotoController@apartmants_save');

Route::get('/photos/restaurants', 'PhotoController@restaurants');
Route::get('/photos/exterior', 'PhotoController@exterior');

Route::get('/contact', 'HomeController@contact');
Route::get('/services', 'HomeController@services');


Route::get('/rooms/standard', 'RoomController@standard');
Route::get('/rooms/superior', 'RoomController@superior');
Route::get('/rooms/deluxe', 'RoomController@deluxe');
Route::get('/rooms/catalog', 'RoomController@catalog');

Route::get('/events/weddings', 'EventsController@wedding');
Route::get('/events/teams', 'EventsController@team');
Route::get('/events/conferences', 'EventsController@conference');
Route::get('/events/birthdays', 'EventsController@birthday');

Route::get('/services/skiing', 'ServicesController@ski');
Route::get('/services/golfing', 'ServicesController@golf');
Route::get('/services/riding', 'ServicesController@ride');
Route::get('/services/rafting', 'ServicesController@raft');


//en Routes

Route::get('/en', 'HomeController@indexEn');
Route::get('/en/home', 'HomeController@indexEn');
Route::get('/en/about', 'HomeController@aboutEn');
Route::get('/en/rooms', 'HomeController@roomsEn');
Route::get('/en/events', 'HomeController@eventsEn');

Route::get('/en/photos', 'HomeController@photosEn');
Route::get('/en/photos/apartmants', 'PhotoController@apartmantsEn');
Route::get('/en/photos/restaurants', 'PhotoController@restaurantsEn');
Route::get('/en/photos/exterior', 'PhotoController@exteriorEn');

Route::get('/en/contact', 'HomeController@contactEn');
Route::get('/en/services', 'HomeController@servicesEn');


Route::get('/en/rooms/standard', 'RoomController@standardEn');
Route::get('/en/rooms/superior', 'RoomController@superiorEn');
Route::get('/en/rooms/deluxe', 'RoomController@deluxeEn');
Route::get('/en/rooms/catalog', 'RoomController@catalogEn');

Route::get('/en/events/weddings', 'EventsController@weddingEn');
Route::get('/en/events/teams', 'EventsController@teamEn');
Route::get('/en/events/conferences', 'EventsController@conferenceEn');
Route::get('/en/events/birthdays', 'EventsController@birthdayEn');

Route::get('/en/services/skiing', 'ServicesController@skiEn');
Route::get('/en/services/golfing', 'ServicesController@golfEn');
Route::get('/en/services/riding', 'ServicesController@rideEn');
Route::get('/en/services/rafting', 'ServicesController@raftEn');
