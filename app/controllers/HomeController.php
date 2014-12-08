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
	public function showlogin()
	{
		return View::make('login');
	}

	public function dologin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to Authenticate.');
			Redirect::back();
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

	// public function work()
	// {
	// 	return View::make('work');
	// }

	// public function education()
	// {
	// 	return View::make('edu');
	// }

	// public function contact()
	// {
	// 	return View::make('contact');
	// }
}
