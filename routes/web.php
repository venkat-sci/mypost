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

Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/createpost', 'PostController@view')->name('createpost');
	Route::post('/createpost', 'PostController@store')->name('createpost');
	Route::get('/editprofile', 'UserController@editprofile')->name('editprofile');

});

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/', 'PostController@index')->name('posts');
// to see single post in the page
Route::get('/post/{id}', 'PostController@show')->name('showpost');
// user view to see info about post users and his related posts
Route::get('/user/{id}', 'UserController@view')->name('userview');
