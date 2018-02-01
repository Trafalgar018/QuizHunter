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


Auth::routes();
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/questionary/create', 'QuestionaryController@create')->name('create')->middleware('auth');
Route::post('/questionary/create', 'QuestionaryController@store')->name('store');

Route::get('/profile/{name}', 'UsersController@home')->name('user.home')->middleware('auth');

Route::get('/users/{name}', 'UsersController@show')->name('user');