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

Route::get('home', 'PagesController@index');
Route::get('/', 'PagesController@index');

Route::get('admin', 'PagesController@admin');
Route::get('summary', 'PagesController@summary');
Route::get('user', 'PagesController@user');

Route::get('documents', 'PagesController@documents');
