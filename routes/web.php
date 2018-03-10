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

Route::group(['middleware' => 'auth'], function(){
Route::get('/questionnary/create', 'QuestionaryController@create')->name('create_questionnary');
Route::post('/questionary/create', 'QuestionaryController@store')->name('store');
Route::delete('/questionary/{questionary}', 'QuestionaryController@destroy')->name('questionary_delete');

Route::get('/question/create', 'QuestionController@create')->name('create_question');
Route::post('/question/create','QuestionController@store')->name('store');

Route::get('/profile/{slug}', 'UsersController@home')->name('user.home');

Route::get('/questionary/load/{id}', 'QuestionaryController@load')->name('questionary_load');
Route::post('/ajaxRequest', 'QuestionaryController@ajaxRequestPost');
});

Route::get('/questionary/{slug}', 'QuestionaryController@show')->name('show');

Route::get('/users/{slug}', 'UsersController@show')->name('user');