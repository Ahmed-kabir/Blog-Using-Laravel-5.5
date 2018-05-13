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

Route::get('/','WelcomeController@index');
Route::get('/blog-detail/{id}','WelcomeController@blog_detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Category_info
Route::get('/add/category','CategoryController@index');
Route::post('/save/category','CategoryController@save_category');
Route::get('/manage/category','CategoryController@manage_category');
Route::get('/edit/category/{id}','CategoryController@edit_category');
Route::post('/update/category','CategoryController@update_category');
Route::get('/category/delete/{id}','CategoryController@delete_category');
//tag info
Route::get('/add/tag','TagController@index');
Route::post('/save/tag','TagController@save_tag');
Route::get('/manage/tag','TagController@manage_tag');
Route::get('/edit_tag/{id}','TagController@edit_tag');
Route::post('/update/tag','TagController@update_tag');
Route::get('/tag/delete/{id}','TagController@delete_tag');
//blog info
Route::get('/add/blog','BlogController@index');
Route::post('/save/blog','BlogController@save_blog');
Route::get('/manage/blog','BlogController@manage_blog');
Route::get('/edit/blog/{id}','BlogController@edit_blog');
Route::post('/update/blog','BlogController@update_blog');
Route::get('/delete/blog/{id}','BlogController@delete_blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
