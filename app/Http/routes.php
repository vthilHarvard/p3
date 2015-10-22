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

/*Route::get('/', function () {
    //return view('welcome');
    return 'Hello Laravel';
});*/
Route::get('/', 'HomeController@getIndex');
Route::get('/para', 'LIController@getIndex');
Route::post('/para', 'LIController@postIndex');
Route::get('/users', 'UserController@getIndex');
Route::post('/users', 'UserController@postIndex');
