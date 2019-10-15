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

Route::get('/','pagesController@home');

Route::resource('members','memberListController');

Route::get('members/{id}/updateacountinformation','memberListController@updateacountinformation');
Route::Post('members/{id}/assignedinformation','memberListController@assignedinformation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



