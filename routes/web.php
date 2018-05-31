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

Route::get('blog/{slug}', ['as'=>'blog.single', 'uses' => 'BlogController@getSingle'])->
where('slug', '[\w\d\-\_]+');

Route::get('blogs','BlogController@getIndex')->name('blog.index');

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout')->name('about');

Route::get('contact', 'PagesController@getContact')->name('contact');

//this is for role
Route::resource('roles', 'RoleController');

//this for tag controller
Route::resource('tags','TagController')->except(['create']);

//this for category

Route::resource('categories','CategoryController')->except(['create']);

//this for post
Route::resource('posts', 'PostController');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
