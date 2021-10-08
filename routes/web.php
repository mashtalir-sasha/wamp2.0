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

Route::localizedGroup(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('services/{slug?}', 'ServicesController@index')->where(['slug' => '[a-zA-Z0-9-]+'])->name('service');
    Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
});
Auth::routes();

Route::get('reviews', function () {
    return Redirect::to('https://www.google.com/search?q=wamp+%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE&oq=wamp+%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE#lrd=0x40d4c57db93c0075:0x91477a218991ace9,1,,,');
});

Route::get('/home', function () {
    return redirect('/admin');
});