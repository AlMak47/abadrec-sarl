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


Route::get('/','PageController@homeIndex');
Route::get('/contact-us','PageController@getContactForm');
Route::get('/about-us','PageController@aboutUs');
Auth::routes();

Route::get('/admin/pages','HomeController@managePage');
Route::get('/admin/slideshow','HomeController@manageSlideshow');
Route::get('/admin/pages/edit/{slug}','HomeController@editPage');

Route::post('/admin/pages/add','HomeController@addPage');
Route::post('/admin/slideshow/add','HomeController@addSlideShow');
Route::post('/admin/pages/edit/{slug}','HomeController@makeEditPage');
