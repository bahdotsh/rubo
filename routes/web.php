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
Route::get('/user/dashboard','PagesController@userdashboard');
Route::get('/user/settings','PagesController@usersettings');
Route::get('/user/chats','PagesController@userchats');

Auth::routes();

Route::get('/home', 'PagesController@userdashboard')->name('home');

Route::get('/admin/dashboard', 'PagesController@admin')->middleware('admin');
Route::get('/admin/settings', 'PagesController@adminsettings')->middleware('admin');
Route::get('/coach/dashboard', 'PagesController@coach')->middleware('coach');
Route::get('/coach/settings', 'PagesController@coachsettings')->middleware('coach');
Route::get('/coach/chats', 'PagesController@coachchats')->middleware('coach');

// Route::get('/coach/regster','Auth\CoachRegisterController@showCoachRegistrationForm')->name('coach.register');
Route::get('/coach/register', function()
{

    return view('auth.coachregister');
});

Route::post('/coach/register', 'Auth\CoachRegisterController@register')->name('coach.register.submit');
