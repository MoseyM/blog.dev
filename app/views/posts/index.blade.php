@extends('layouts.master')
@section('content')
	<h1>We're Here</h1>
	<div class="blogPostStyle">
		@foreach ($posts as $post)
			<div class="post">
				<h2 class="h2-left"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}} </h2></a>
				<p> {{{ $post->body }}} </p>
				<span class="spanStyle"><a href="{{{ action('PostsController@edit', $post->id) }}}"> EDIT </a></span>
				<span class="timeStyle">{{ $post->created_at->format('l, M jS Y'); }}</span>
			</div>
		@endforeach
	<!-- this shows the numbers on the bottom of the list that tells how many pages you have -->
	<!-- We are appending on our search results so when user clicks off 1 the search data will stay and be paginated -->
	<p> {{ $posts->appends(array('searchKey' => $search))->links() }} </p>
@stop