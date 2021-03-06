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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@root');
    Route::get('home', 'HomeController@home')->name('home');
    Route::get('tasks', 'TasksController@view')->name('tasks');
    Route::post('tasks', 'TasksController@create')->name('tasks.create');
});

