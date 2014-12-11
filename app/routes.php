<?php
Route::get('login',  'HomeController@showlogin');
Route::post('login', 'HomeController@dologin');
Route::get('logout', 'HomeController@dologout');

Route::resource('posts', 'PostsController');

Route::get('/', 'HomeController@chkAuth');

Route::get('resume','HomeController@redirResume');

Route::get('home' , 'HomeController@redirResume');

Route::get('portfolio', 'HomeController@redirPortfolio');

Route::get('about' , 'HomeController@about');

Route::get('search' , 'PostsController@index');


