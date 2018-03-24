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

// Route::get('/profile/', 'ProfileController@index')->name('profile');
// Route::get('/profile/{id}/edit', 'ProfileController@edit');
// Route::put('/profile/{id}/', 'ProfileController@update');



Route::get('/test', function () {
    return view('layouts.newapp');
})->name('test');

Route::prefix('api')->group(function(){
	Route::get('/getFields', 'AjaxController@getFields');
	Route::post('/getResults', 'AjaxController@getResults');
	Route::post('/addRecord', 'AjaxController@addRecord');
	Route::post('/addCompany', 'AjaxController@addCompany');
	
});

Route::prefix('profile')->group(function(){
	Route::get('/', 'ProfileController@index')->name('profile');
	Route::get('/card', 'ProfileController@indexCard');

	Route::get('/edit', 'ProfileController@edit');
	Route::post('/update', 'ProfileController@update');

});

Route::prefix('admin')->group(function(){

	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/search', 'AdminController@search')->name('admin');
	
	Route::get('/PlacementRecord','recordController@showRecord');

	

	Route::get('/PlacementRecord/edit/{id}', 'recordController@editRecord');
	Route::post('/PlacementRecord/updateRecord', 'recordController@updateRecord');
	Route::post('/PlacementRecord/DeletRecord', 'recordController@DeletRecord' );


	Route::get('/CompanyRecord','recordController@showCompany');
	

	Route::get('/CompanyRecord/edit/{id}', 'recordController@editCompany');
	Route::post('/CompanyRecord/updateCompany', 'recordController@updateCompany');
	Route::post('/CompanyRecord/DeletCompany', 'recordController@DeletCompany');

	Route::get('/Recruiter','AdminController@Recruiter');
	Route::post('/Recruiter/insert','AdminController@addRecruiter');
	Route::get('/Recruiter/edit/{id}','AdminController@editRec');
	Route::post('/Recruiter/update','AdminController@updateRec');
	Route::post('/Recruiter/delete','AdminController@deleteRec');
});

