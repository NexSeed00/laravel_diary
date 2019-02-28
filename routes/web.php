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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'TaskController@index')->name('tasks.index');
    
    Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
    Route::post('/tasks/create', 'TaskController@store')->name('tasks.store');
    
    Route::group(['middleware' => 'can:view, task'], function() {
        Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
    });


    Route::post('/tasks/{task}/edit', 'TaskController@update')->name('tasks.update');
});


Auth::routes();