<?php

class HomeController extends BaseController {
	public function showlogin()
	{
		return View::make('login');
	}

	public function whacka() 
	{
		return View::make('whacka.index');
	}

	public function blogIntro()
	{
		return View::make('posts.intro');
	}
	public function chkAuth() {
		if (Auth::check()) {
			return Redirect::action('PostsController@index');
		} else {
			return View::make('login');
		}
	}

	public function dologin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password), false, true)) {
			// return 'test';
		    return Redirect::intended('posts');
		} else {
			Session::flash('errorMessage', 'Failed to Authenticate.');
			return Redirect::back();
		}
	}

	public function dologout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully signed out');
		return Redirect::action('PostsController@index');	
	}

	public function redirResume()
	{
		return View::make('resume');
	}

	public function redirPortfolio()
	{
		return View::make('portfolio');
	}

	public function about()
	{
		return View::make('about');
	}
	public function affordIt()
	{
		return View::make('affordIt');
	}
}
