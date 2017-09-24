<?php

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

Route::get('/', "PostsController@index");

Route::get('/show', "PostsController@show");

Route::get('/post',"PostsController@store");

Route::group(['middleware' => 'web'], function () {
    Route::get('example', 'ExampleController@getExample');
    Route::post('example', 'ExampleController@postExample');
});