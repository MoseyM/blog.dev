<?php
Route::get('login',  'HomeController@showlogin');
Route::post('login', 'HomeController@dologin');
Route::get('logout', 'HomeController@dologout');

//For Http Requests
Route::resource('posts', 'PostsController');

Route::get('/', function() {
	return View::make('index');
});

Route::get('skills', function() {
	return View::make('job.skills');
});

Route::get('resume','HomeController@redirResume');

Route::get('home' , 'HomeController@redirResume');

Route::get('portfolio', 'HomeController@redirPortfolio');

Route::get('about' , 'HomeController@about');

Route::get('search' , 'PostsController@index');

Route::get('whacka','HomeController@whacka');

Route::get('blog', 'PostsController@index');

Route::get('affordIt', 'HomeController@affordIt');

Route::post('skills','HomeController@skills');

Route::get('index_template', function() {
	return View::make('index_template');
});

Route::get('jobForm', function() {
	return View::make('job.sendEmail');
});

