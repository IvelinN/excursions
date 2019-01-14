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


Route::resource('excursions', 'ExcursionsController');
Route::resource('organisators', 'OrganisatorsController');
Route::resource('transports', 'TransportsController');


Route::resource('images', 'ImageController');


Route::post('excursions.search', 'SearchController@searchExcursion');
Route::post('organisators.search', 'SearchController@searchOrganisator');
Route::post('transports.search', 'SearchController@searchTransport');




