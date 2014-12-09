<?php

class HomeController extends BaseController {
	public function showlogin()
	{
		return View::make('login');
	}

	public function dologin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('posts');
		} else {
			Session::flash('errorMessage', 'Failed to Authenticate.');
			return Redirect::back();
    // login failed, go back to the login screen
		}
	}

	public function dologout()
	{
		Auth::logout();
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
}
