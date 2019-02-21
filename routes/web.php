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
Route::get('/', 'SiteContentController@index')->name('index');


Route::resource('services' ,'ServicesController');
Route::get('/service-create', 'ServicesController@create')->name('services');
Route::post('/services/store','ServicesController@store')->name('services.store');


Route::resource('blog', 'BlogController');

Route::resource('contact', 'ContactController');

Route::resource('user', 'UserController');

Route::resource('sitecontent', 'SiteContentController');

Route::resource('projet','ProjetController');

Auth::routes();
Route::get('/projet-index', 'ProjetController@index')->name('projet');
Route::get('/projet-create', 'ProjetController@create')->name('projet');
Route::post('/projet/store','ProjetController@store')->name('projet.store');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('carousel','CarouselController');
