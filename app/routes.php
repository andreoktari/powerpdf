<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/*----untuk halaman depan----*/
Route::get('/home', 'HomeController@getHome');
/*----untuk halaman daftar----*/
Route::get('/reg', 'HomeController@getDaftar');
/*----untuk proses daftar----*/
Route::post('/register', 'HomeController@postUser');
/*----untuk halaman login----*/
Route::get('/login', 'LogController@getLogin');
/*----untuk proses login----*/
Route::post('/masuk', 'LogController@postMasuk');
/*----untuk halaman setelah login----*/
Route::get('/beranda', 'HomeController@halBeranda')->before('auth');
/*----logout----*/
Route::get('/logout', 'LogController@getLogout')->before('auth');
