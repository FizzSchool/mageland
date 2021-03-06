<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@index');
Route::get('/users/freg', 'UserController@registerWithFb');
// Test routes
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('dispatch', 'UserController@testDispatch');
// Routes for posts
Route::get('index/{page?}', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/create', 'PostController@store');
Route::get('posts/{id}', ['as'=> 'posts', 'uses'=>'PostController@showAPost']);
Route::get('posts/{id}/edit', 'PostController@edit');
Route::patch('posts/{id}', 'PostController@update');

// Routes for users
Route::get('users/show', 'UserController@show');
Route::get('users/create', 'UserController@create');
Route::post('users/create', 'UserController@store');
Route::get('users/{id}/edit', 'UserController@edit');
Route::patch('users/{id}', 'UserController@update');

// Route for categories
Route::get('categories/{id}/show', 'CategoryController@show');
// Route controllers
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);