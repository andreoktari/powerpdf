<?php 

class LogController extends BaseController {

	public function getLogin()
	{
		return View::make('home.log');
	}


	public function postMasuk()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		$credentials = ['username' => $username, 'password' => $password];
		if(Auth::attempt($credentials))
		{
			Session::put('username',$username);
			return Redirect::to('beranda');
		}
		else
		{
			return Redirect::back()->with('pesan_error', 'Gagal, Email atau password salah atau bahkan tidak Anda isi !');
		}
	}
	public function getLogout()
	{
		Auth::logout();    
		return Redirect::to('home')->with('pesan_logout', 'berhasil logout');
	}


}