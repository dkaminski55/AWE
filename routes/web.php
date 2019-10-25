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

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');


Route::resource('note', 'NoteController');
/*Route::get('/note', 'NoteController@index');
Route::get('/note/create', 'NoteController@create');
Route::get('/note/{note}', 'NoteController@show');
Route::post('/note', 'NoteController@store');
Route::get('/note/{note}/edit', 'NoteController@edit');
Route::patch('/note/{note}', 'NoteController@update');
Route::delete('/note/{note}', 'NoteController@destroy');*/

Route::patch('/tasks/{task}', 'TaskController@update');
Route::post('/notes/{note}/tasks', 'TaskController@store');
