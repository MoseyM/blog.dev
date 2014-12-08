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
Route::get('login', 'HomeController@showlogin');
Route::post('login', 'HomeController@dologin');
Route::get('logout', 'HomeController@dologout');

Route::get('/', function() {
	return View::make('home');
});

Route::resource('posts', 'PostsController');

Route::get('resume','HomeController@redirResume');

Route::get('portfolio', 'HomeController@redirPortfolio');

Route::get('home' , 'HomeController@redirResume');

Route::get('orm-test' , function()
	{
		$post1 = new Post();
		$post1->title = 'Eloquent is awesome!';
		$post1->body  = 'It is super easy to create a new post.';
		$post1->save();

		$post2 = new Post();
		$post2->title = 'Post number two';
		$post2->body  = 'The body for post number two.';
$post2->save();
	});

Route::get('about' , 'HomeController@about');

