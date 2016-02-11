<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getHome()
	{
		return View::make('home.home');
	}
	public function getDaftar()
	{
		return View::make('home.daftar');
	}
	public function halBeranda()
	{
		return View::make('dashboard.beranda');
	}
	public function postUser()
	{
		$user = new Daftar();
		$user->nama=Input::get('nama');
		$user->username=Input::get('username');
		$user->password=Hash::make(Input::get('password'));
		$ver=$user->save();
		if($ver)
		{
			return Redirect::to('/home')->with('pesan','Anda sudah berhasil mendaftar');
		}
		else
		{
			return Redirect::back()->withInput;
		}
	}





}
