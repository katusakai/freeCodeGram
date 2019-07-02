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

Route::get('/email', function () {
    return new \App\Mail\NewUserWelcomeMail();
});

Route::post('follow/{user}', 'FollowsController@store')->name('follow.user');

Route::get('/', 'PostsController@index')->name('post.index');
Route::get('/p/create', 'PostsController@create')->name('post.create');
Route::get('/p/{post}', 'PostsController@show')->name('post.show');
Route::post('/p', 'PostsController@store')->name('post.store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/redirect', 'Auth\LoginController@redirectToProvider')->name('google.login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');