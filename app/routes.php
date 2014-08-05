<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Event::listen('MowerMatcher.Registration.Events.UserRegistered', function($event)
{
  // 
});

Event::listen('MowerMatcher.Images.ImageWasSaved', function($event)
{
  //
});

/**
 * Testing Stuff
 *
 */
Route::get('test', [
  'as' => 'test_path',
  'uses' => 'TestController@test'
]);

/*
* Home page
 *
*/
Route::get('/', [
  'as' => 'home',
  'uses' => 'PagesController@home'
]);

/*
* Registration
 *
*/
Route::get('register', [
  'as' => 'register_path',
  'uses' => 'RegistrationController@create'
]);

Route::post('register', [
  'as' => 'register_path',
  'uses' => 'RegistrationController@store'
]);

/**
 * Sessions
 *
 */
Route::get('login', [
  'as' => 'login_path',
  'uses' => 'SessionsController@create'
]);

Route::post('login', [
  'as' => 'login_path',
  'uses' => 'SessionsController@store'
]);

Route::get('logout', [
  'as' => 'logout_path',
  'uses' => 'SessionsController@destroy'
]);

/**
 * Mowers
 *
 */

Route::post('mowers', [
  'as' => 'mowers_path',
  'uses' => 'MowersController@store'
]);

Route::get('mowers/{id}', [
  'as' => 'mowers_path',
  'uses' => 'MowersController@show'
]);

Route::get('sell', [
  'as' => 'sell_path',
  'uses' => 'MowersController@create'
]);

/**
 * Uploader
 *
 */
Route::get('uploader', [
  'as' => 'uploader_path',
  'uses' => 'ImagesController@uploader_get'
]);

Route::post('uploader', [
  'as' => 'uploader_path',
  'uses' => 'ImagesController@uploader_post'
]);

/**
 * User & Profile
 *
 */
Route::get('users', [
  'as' => 'users_path',
  'uses' => 'UsersController@index'
]);

Route::get('@{username}', [
  'as' => 'profile_path',
  'uses' => 'UsersController@show'
]);

/**
 * Filters
 *
 */
Route::post('filters', [
  'as' => 'filters_path',
  'uses' => 'FiltersController@store'
]);

Route::get('filters/manage', [
  'as' => 'manage_filters_path',
  'uses' => 'FiltersController@index'
]);

Route::get('filters/{id}', [
  'as' => 'filters_path',
  'uses' => 'FiltersController@show'
]);