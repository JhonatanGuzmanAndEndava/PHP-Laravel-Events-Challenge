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

//Admin

Route::get('/admins/users','AdminController@index')->middleware('admin')->middleware('auth')->name('admins.users');
Route::get('/admins/events','AdminController@viewEvents')->middleware('admin')->middleware('auth')->name('admins.events');
Route::get('/admins/events/{event}','AdminController@showEvent')->middleware('admin')->middleware('auth')->name('admins.show');
Route::get('/admins/report','AdminController@generateReport')->middleware('admin')->middleware('auth')->name('admins.report');

Route::post('/admins/report/do','AdminController@doReport')->middleware('admin')->middleware('auth')->name('admins.doreport');

Route::put('/admins/do/{user}','AdminController@doAdmin')->middleware('admin')->middleware('auth')->name('admins.doadmin');
Route::put('/admins/remove/{user}','AdminController@removeAdmin')->middleware('admin')->middleware('auth')->name('admins.removeadmin');

Route::delete('/admins/destroy/{user}','AdminController@destroy')->middleware('admin')->middleware('auth')->name('admins.destroy');
Route::delete('/admins/delete/{event}','AdminController@deleteEvent')->middleware('admin')->middleware('auth')->name('admins.delete');
