<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

//ASSIGNMENT ROUTES
Route::get('/locations', 'LocationController@index');
Route::get('/stories','StoryController@index');
Route::get('/tags','StoryController@tags');
Route::get('/story/create','StoryController@create');
Route::post('/story/store','StoryController@store');



//PROJECT ROUTES
//Route::get('/landing','LandingController@index');
//Route::post('/search','LandingController@search');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/landing','LandingController@index');
	Route::post('/search','LandingController@search');

    //
});

/*Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
*/