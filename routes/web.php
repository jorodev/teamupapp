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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
Route::get('/dashboard/messages', 'DashboardController@showMessages');
Route::get('/dashboard/projects', 'DashboardController@showProjects');
Route::get('/dashboard/lookups', 'DashboardController@showLookups');
Route::get('/dashboard/profile/edit', 'DashboardController@editProfile');
Route::get('/dashboard/settings', 'DashboardController@showSettings');

Route::get('/profile/name', 'DashboardController@showProfile');

//Projects
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/create', 'ProjectController@create');
Route::post('/projects/create', 'ProjectController@store');