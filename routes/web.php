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

Route::get('/questionnary/create', 'QuestionaryController@create')->name('create_questionnary')->middleware('auth');
Route::post('/questionary/create', 'QuestionaryController@store')->name('store');
Route::get('/questionary/{id}', 'QuestionaryController@show')->name('show');

Route::get('/question/create', 'QuestionController@create')->name('create_question')->middleware('auth');
Route::post('/question/create','QuestionController@store')->name('store');

Route::get('/profile/{name}', 'UsersController@home')->name('user.home')->middleware('auth');
Route::get('/users/{name}', 'UsersController@show')->name('user');