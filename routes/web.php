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

Route::get('/home', 'PagesController@userdashboard')->name('home');


 Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
 Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
 Route::get('/admin/logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
 Route::get('admin/', 'AdminController@index')->name('admin.dashboard');


 Route::get('/coach/login','Auth\CoachLoginController@showLoginForm')->name('coach.login');
 Route::post('/coach/login', 'Auth\CoachLoginController@login')->name('coach.login.submit');
 Route::get('/coach/logout/', 'Auth\CoachLoginController@logout')->name('coach.logout');
 Route::get('coach/', 'CoachController@index')->name('coach.dashboard');

Route::get('/coach/regster','Auth\CoachRegisterController@showRegisterForm')->name('coach.register');
Route::post('/coach/register', 'Auth\CoachRegisterController@register')->name('coach.register.submit');
