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

Route::get('/', 'Client\LandingPageController@index');
Route::get('/shop', 'Client\ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'Client\ShopController@show')->name('shop.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
