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
Route::get('/company', 'HomeController@company')->name('company');
Route::get('/advertising', 'HomeController@advertising')->name('advertising');
Route::get('/promotion', 'HomeController@promotion')->name('promotion');
Route::get('/btl', 'HomeController@btl')->name('btl');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/festivals', 'HomeController@festivals')->name('festivals');
Route::get('/profile/{user}', 'UserController@profile')->name('profile');

Route::prefix('events')->group(function () {
    Route::name('events.')->group(function () {
        Route::get('/all', 'EventController@index')->name('all');
        Route::get('/{event}', 'EventController@event')->name('event');
    });
});

Route::prefix('festivals')->group(function () {
    Route::name('festivals.')->group(function () {
        Route::get('/all', 'FestivalController@index')->name('all');
        Route::get('/{festival}', 'FestivalController@festival')->name('festival');
        Route::get('/{festival}/participate', 'FestivalController@participate')->name('festival.participate');
        Route::get('/{festival}/visit', 'FestivalController@visit')->name('festival.visit');
        Route::get('/{festival}/award', 'FestivalController@award')->name('festival.award');
    });
});

Route::prefix('news')->group(function () {
    Route::name('news.')->group(function () {
        Route::get('/all', 'NewsController@index')->name('all');
        Route::get('/{tiding}', 'NewsController@tiding')->name('tiding');
    });
});
