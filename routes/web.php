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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
	return view('welcome');
});

	Route::get('userpost/{id}','User\PostsController@showpostsbyuser');
	Route::get('categoryposts/{id}','User\PostsController@showpostsbycategory');
	Route::resource('posts','User\PostsController');
	Route::resource('comment','User\CommentController');
	Route::get('logout','User\UserController@logout');
	Route::get('login','User\UserController@showlogin');
	Route::post('login','User\UserController@login');
	Route::get('register','User\UserController@showregister');
	Route::post('register','User\UserController@register');


Route::get('testadmin','Admin\DashboardController@testadmin'); // to add new admin for the first time


Route::get('adminlogin','Admin\LoginController@showlogin');
Route::post('adminlogin','Admin\LoginController@login');


Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){\
	Route::get('logout','Admin\LoginController@logout');
	Route::resource('dashboard','Admin\DashboardController');
	Route::resource('posts','Admin\PostsController');
	Route::resource('comments','Admin\CommentsController');
	Route::resource('users','Admin\UsersController');
	Route::resource('admins','Admin\AdminsController');
	Route::resource('categories','Admin\CategoriesController');
});
