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

Route::resource('/', 'HomeController');
Route::resource('/woodlands', 'WoodlandController');
Route::resource('/admin/woodlands', 'WoodlandsController');
Route::resource('admin/users', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('/about', 'AboutController');
Route::resource('/project', 'ProjectController');
Route::resource('/contact', 'ContactController');

Route::group(['middleware' => ['web']], function() {


});

Route::auth();

Route::get('/home', 'HomeController@index');
