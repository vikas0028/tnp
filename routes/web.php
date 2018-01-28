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
    return view('pages.index');
})->name('root');

Route::get("/placementrecord", 		'PageController@showRecord')
		->name('placementrecord');

Route::get("/associatedrecruiter", 	'PageController@showRecruiter')
		->name('associatedrecruiter');

Route::get("/recruiterspeak", 		'PageController@showSpeak')
		->name('recruiterspeak');

Route::get("/placementgallery", 	'PageController@showGallery')
		->name('placementgallery');
// Route::view("/register",'pages.register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
