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

Route::get('/','TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show')->name('teams.show');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@create')->name('login.create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::post('/teams/{teamId}/comments', 'CommentsController@store');

Route::get('/verification/{id}', 'LoginController@verification')->name('verification');



