<?php

class PostsController extends \BaseController 
{
	public function __construct()
	{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function index()
	{
		$posts = Post::paginate(5);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	public function update($id)
	{
		$post = Post::find($id);
		return $this->checkThis($post);
	}

	public function store()
	{
    // create the validator
    	$post1 = new Post();
    	Log::info();
		return $this->checkThis($post1);
    }

	public function show($id)
	{
		try {
			$post = Post::findorfail($id); 
		} catch (Exception $e) {
			App::abort(404);
		}
		return View::make('posts.show')->with('post', $post);
	}

	public function edit($id)
	{
		try {
			$post = Post::findorfail($id);
		} catch (Exception $e) {
			App::abort(404);
		}
		return View::make('posts.edit')->with('post', $post);
	}

	public function destroy($id)
	{
		$post = Post::findorfail($id);

		$post->delete();
		return Redirect::action('/');
	}

	protected function checkThis(Post $post) {
		// passing clean slate of post to add properties to later. We are checking the user input against our rules first.
		$validator = Validator::make(Input::all(), Post::$rules);
    	if ($validator->fails()) {
    		Session::flash('errorMessage','Post was not saved successfully!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }

	    $post->title = Input::get('title');
		$post->body  = Input::get('body');
		$post->save();
		Session::flash('successMessage','Post successfully saved!');
		return Redirect::action('PostsController@index');
	}	
}
