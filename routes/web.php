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
    return view('welcome');
});

Auth::routes();

Route::get('/p/{post}', 'PostsController@show')->name('post.show');
Route::get('/p/create', 'PostsController@create')->name('post.create');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{userId}', 'ProfilesController@index')->name('profile.show');
