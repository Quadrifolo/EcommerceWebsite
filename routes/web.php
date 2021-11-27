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

Auth::routes(['verify' => true]);

Route::get('/', '\Aimeos\Shop\Controller\CatalogController@homeAction')->name('aimeos_home');

Route::get('/company', 'GalleryController@company')->name('company');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send_mail');
Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');

