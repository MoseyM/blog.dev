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
		// setting a var to the search object and adding eager loading for quicker searching if not null.
		$query = Post::with('user');
		$search = Input::get('searchKey');
		// if statement will add on the where method that will change query to only hold info related to searchTerm
		if (Input::has('searchKey')) {
			$query->where('title', 'LIKE' , "%{$search}%");
		}
		//Universal no matter if search or not actions that will apply to our query
		$posts = $query->orderBy('created_at', 'desc')->paginate(4);

		if (Input::get('searchKey') && count($posts) <= 0) {
			Session::flash('errorMessage', 'There are no results matching your search.');
			return Redirect::back();
		}
		// MUST include info you want to use in the view by passing it with the with()
		return View::make('posts.index')->with('posts', $posts)->with('search',$search);
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
    	Log::info('userInput',Input::all());
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
		if(!empty(Input::get('sentiment') && Input::get('confidence'))) {
			$post->confidence = Input::get('confidence');
			$post->sentiment = Input::get('sentiment');
		}
		$post->user_id = Auth::id();
		$post->save();
		Session::flash('successMessage','Post successfully saved!');
		return Redirect::action('PostsController@index');
	}	
}
