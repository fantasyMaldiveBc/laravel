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

Route::get('tripline/queryTripline/queryTriplineById/{id}', 'api\tripline\queryTriplineController@queryTriplineById');//ok demo

//待优化
Route::resource('tripline/searchTripline', 'api\tripline\searchTriplineController');
Route::resource('tripline/modifyTripline', 'api\tripline\modifyTriplineController');

Route::resource('user/searchUser', 'api\user\searchUserController');
Route::resource('user/queryUser', 'api\user\queryUserController');
Route::resource('user/modifyUser', 'api\user\modifyUserController');

//filter 过滤器
Route::filter('tripline', function(){});