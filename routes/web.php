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

Route::get('/', 'StaticController@getHome');
Route::get('/about', 'StaticController@getAbout');
Route::get('/glossary', 'StaticController@getGlossary');

Route::resource('players/wowy', 'PlayerWowyController');
Route::resource('players/woodmoney', 'PlayerWoodmoneyController');
Route::resource('players/boxcars', 'PlayerBoxcarsController');

Route::get('puckiq/teams/boxcars', 'PuckiqController@index');
Route::get('puckiq/teams/wowy', 'PuckiqController@index');
Route::get('puckiq/teams/woodmoney', 'PuckiqController@index');
