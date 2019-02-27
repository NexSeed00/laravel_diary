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

Route::get('/', 'TaskController@index')->name('tasks.index');

Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/tasks/create', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{task_id}/edit', 'TaskController@edit')->name('tasks.edit');
Route::post('/tasks/{task_id}/edit', 'TaskController@update')->name('tasks.update');