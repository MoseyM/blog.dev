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

	public function chkAuth() {
		if (Auth::check()) {
			return Redirect::action('PostsController@index');
		} else {
			return View::make('login');
		}
	}

	public function dologin()
	{
		$email = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password), false, true)) {
			// return 'test';
		    return Redirect::action('PostsController@index');
		} else {
			Session::flash('errorMessage', 'Failed to Authenticate.');
			return Redirect::back();
		}
	}
	public function register() {
		
	}
	public function dologout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully signed out');
		return Redirect::action('PostsController@index');	
	}

	public function redirResume()
	{
		$skills = Skill::get();
		return View::make('resume')->with('skills', $skills);
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

	public function skills()
	{
		$skill = new Skill();
		$skill->skill = Input::get('skill');
		$skill->level = Input::get('level');
		$skill->save();
		return Redirect::action('PostsController@index');
	}
}
