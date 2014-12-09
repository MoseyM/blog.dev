<?php
Route::get('login', 'HomeController@showlogin');
Route::post('login', 'HomeController@dologin');
Route::get('logout', 'HomeController@dologout');

Route::resource('posts', 'PostsController');

Route::get('/', function() {
	return View::make('posts.intro');
});

Route::get('resume','HomeController@redirResume');

Route::get('home' , 'HomeController@redirResume');

Route::get('portfolio', 'HomeController@redirPortfolio');

Route::get('about' , 'HomeController@about');

