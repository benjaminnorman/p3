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

Route::get('/', function () {
    return view('welcome');
});

//Lorem Ipsum Generator Routes
Route::get('/randomtext', function(){
    return 'Welcome to the Lorem Ipsum Generator';
});
Route::get('/randomtext/create', 'LoremController@getCreate');
Route::post('/randomtext/create', 'LoremController@postCreate');

//Random User Generator
Route::get('/randomuser/create', 'FakeUserController@getCreate');
Route::post('/randomuser/create', 'FakeUserController@postCreate');
