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
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
Route::get('/company', 'HomeController@index')->name('company');
Route::get('/profile/{user}', 'UserController@profile')->name('profile');

Route::prefix('events')->group(function () {
    Route::name('events.')->group(function () {
        Route::get('/', 'EventController@index')->name('all');
        Route::get('/{event}', 'EventController@event')->name('event');
    });
});

Route::prefix('festivals')->group(function () {
    Route::name('festivals.')->group(function () {
        Route::get('/', 'FestivalController@index')->name('all');
        Route::get('/{festival}', 'FestivalController@festival')->name('festival');
    });
});

Route::prefix('news')->group(function () {
    Route::name('news.')->group(function () {
        Route::get('/', 'NewsController@index')->name('all');
        Route::get('/{tiding}', 'NewsController@tiding')->name('tiding');
    });
});
