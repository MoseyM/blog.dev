@extends('layouts.master')
@section('additionalStyle')
	<link rel="stylesheet" href="/css/main_style.css">
@stop
@section('title') The Blog Experience @stop
@section('content')
	<div class="content-posts">
		@foreach ($posts as $post)
			<div class="post">
				<h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}} </a></h2>
				<p> {{{ $post->body }}} </p>
				<span class="spanStyle"><a href="{{{ action('PostsController@edit', $post->id) }}}"> EDIT </a></span>
				<span class="timeStyle">{{ $post->created_at->format('l, M jS Y'); }}</span>
			</div>
		@endforeach
	</div>
	<div class="content-icons">
		<p> Tester </p>
	</div>
	<div class="content-functions">
		<div>
			{{ Form::open(['action'=>'PostsController@index', 'method'=>'GET', 'class'=>'form-inline']) }} 
			{{ Form::text('searchKey', "<span class='glyphicon glyphicon-search search-icon' aria-hidden='true'></span> Search", ['class' => 'form-control', 'placeholder' => "Search"]) }}
			{{ Form::submit('search') }}
			{{ Form::close() }}
		</div>
	</div>
	<div class="spacer" style="clear: both"></div>
@stop