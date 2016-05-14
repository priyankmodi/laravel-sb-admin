<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');
Route::get('/home', 'HomeController@index');

/* AUTHENTICATION */
Route::auth();

/* PAGES */
Route::get('/charts', ['middleware' => 'auth', function () { return view('pages.charts'); }]);
Route::get('/tables', ['middleware' => 'auth', function () { return view('pages.tables'); }]);
Route::get('/forms', ['middleware' => 'auth', function () { return view('pages.forms'); }]);
Route::get('/bootstrap-elements', ['middleware' => 'auth', function () { return view('pages.bootstrap-elements'); }]);
Route::get('/bootstrap-grid', ['middleware' => 'auth', function () { return view('pages.bootstrap-grid'); }]);
Route::get('/blank-page', ['middleware' => 'auth', function () { return view('pages.blank-page'); }]);
