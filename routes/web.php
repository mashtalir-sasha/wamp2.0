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

Route::get('/home', function () {
    return redirect('/admin');
});