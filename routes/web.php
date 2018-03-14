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
Route::delete('/question/{question}', 'QuestionController@destroy')->name('question_delete');
Route::get('/question/edit/{question}', 'QuestionController@edit')->name('question_edit');
Route::post('/question/edit/{question}', 'QuestionController@remake')->name('question_remake');

Route::get('/document/create', 'DocumentController@create')->name('create_document');
Route::post('/document/create', 'DocumentController@store')->name('document_store');
Route::get('/documents/{slug}', 'DocumentController@show')->name('show_document');
Route::delete('/document/{document}', 'DocumentController@destroy')->name('document_delete');

Route::post('/comment/create/{id}','CommentController@store')->name('comment_create');
Route::post('/valoration/create/{id}','ValorationController@store')->name('valoration_controller');

Route::get('/profile/{slug}', 'UsersController@home')->name('user.home');
Route::get('/questions/{slug}','QuestionController@show')->name('question_show');

Route::get('/questionary/load/{id}', 'QuestionaryController@load')->name('questionary_load');
Route::post('/ajaxRequest', 'QuestionaryController@ajaxRequestPost');
});

Route::post('/register/validate', 'Auth\RegisterController@validateAJAX')->middleware('guest');

Route::get('/questionary/{slug}', 'QuestionaryController@show')->name('show');

Route::get('/users/{slug}', 'UsersController@show')->name('user');