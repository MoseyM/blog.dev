@extends('layouts.master')
@section('title') 
	The Blog Experience 
@stop
@section('additionalStyle')
	<style type="text/css">
		.contentdiv {
			margin: 10px;
			background: none;
		}
	</style>
@stop
@section('content')
	<div class="contentdiv">
		<div class="posts">
			@foreach($posts as $post)
				<h4> <a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}} </a></h4>
			@endforeach
		</div>
		<div class="links">
			{{ Form::open(['action'=>'PostsController@index', 'method'=>'GET', 'class'=>'form-inline']) }} 
			{{ Form::text('searchKey', null, ['class' => 'form-control', 'placeholder' => "Search"]) }}
			{{ Form::submit('search') }}
			{{ Form::close() }}
		</div>
	</div>
@stop

@section('endscript')
	$('.container-fluid-custom').css({"background-image": "url('/img/blog_images/blog_index.jpg')"});
@stop