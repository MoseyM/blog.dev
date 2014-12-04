@extends('layouts.master')
@section('additionalStyle')
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
@stop

@section('content')
	<h1>We're Here</h1>

@foreach ($posts as $post)
	<div class="addedStyle">
		<h2 class="h2-left"> {{{ $post->title }}} </h2>
		<p> {{{ $post->body }}} </p>
		<span class="spanStyle"><a href="{{{ action('PostsController@edit', $post->id) }}}"> EDIT </a></span>
	</div>
@endforeach 
@stop

@section('jquery')
	$(function(){
		$(".spanStyle").hover(function() 
		{
		$(this).toggleClass("interest");
		});
	});
	
@stop