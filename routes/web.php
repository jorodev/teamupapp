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

Route::get('/', 'HomeController@statistics');

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/projects', 'DashboardController@showProjects')->name('showProjects');
Route::get('/dashboard/lookups', 'DashboardController@showLookups')->name('showLookups');
Route::get('/dashboard/settings', 'DashboardController@showSettings')->name('showSettings');

// Edit Profile
Route::get('/profile/{name}', 'DashboardController@showProfile')->name('showProfile');
Route::get('/dashboard/profile/edit', 'ProfileController@displayProfileInfo')->name('editProfile');
Route::put('/dashboard/profile/editInfo', 'ProfileController@updateProfileInfo')->name('updateProfileInfo');
Route::put('/dashboard/profile/editImage', 'ProfileController@updateProfileImage')->name('updateProfileImage');
Route::delete('/dashboard/profile/deleteImage', 'ProfileController@deleteProfileImage')->name('deleteProfileImage');
Route::put('/dashboard/profile/editSocials', 'ProfileController@updateSocialLinks')->name('updateSocialLinks');

// Projects
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/create', 'ProjectController@create')->name('projects');
Route::get('/projects/view/{id}', 'ProjectController@show')->name('projects');
Route::post('/projects/create', 'ProjectController@store')->name('projects');
Route::delete('/projects/delete/{id}', 'ProjectController@destroy')->name('projects');