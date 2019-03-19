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

Route::get('/', 'PagesController@index');
Route::get('/employer','PagesController@employer');
Route::get('/contact','PagesController@contact');
Route::get('/dashboard','PagesController@userdashboard');
Route::get('/settings','PagesController@usersettings');
Route::get('/chats','PagesController@userchats');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
