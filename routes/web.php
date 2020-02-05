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

Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('blog/{slug}', 'Web\PagesController@post')->name('post');
Route::get('blog', 'Web\PagesController@blog')->name('blog');
Route::get('category/{slug}', 'Web\PagesController@category')->name('category');

//Admin
Route::resource('messages', 'Admin\MessagesController');
Route::resource('categories', 'Admin\CategoriesController');
Route::resource('posts', 'Admin\PostsController');