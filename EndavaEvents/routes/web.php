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

Route::get('/home', 'HomeController@index')->name('home');

//CRUD

Route::resource('events','EventController')->middleware('auth');

//Profile

//Route::resource('profile','ProfileController')->middleware('auth');

Route::get('/profile', 'ProfileController@viewProfile')->middleware('auth')->name('profile.index');;

Route::get('/profile/{profile}/edit', 'ProfileController@editProfile')->middleware('auth')->name('profile.edit');

Route::put('/profile/{profile}', 'ProfileController@updateProfile')->middleware('auth')->name('profile.update');