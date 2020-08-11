<?php

use Illuminate\Support\Facades\Route;

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
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', 'ListingController@index');

Auth::routes();
Route::resource('listing','ListingController');

Route::get('/home', 'HomeController@index')->name('home');
