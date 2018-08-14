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

Route::get('auth/{socialprovider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{socialprovider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company', 'HomeController@index')->name('company');
Route::get('/events/{event}', 'HomeController@index')->name('events');
Route::get('/festivals/{festival}', 'HomeController@index')->name('festivals');
Route::get('/news/{tiding}', 'HomeController@index')->name('news');
