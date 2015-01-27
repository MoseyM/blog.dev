@extends('layouts.master')
@section('additionalStyle')
	<link rel="stylesheet" href="/css/main_style.css">
@stop
@section('title') The Blog Experience @stop
@section('content')
	<div class="content-posts">
	{{ $posts }}
		
	</div>
	<div class="content-icons">
		<p> Tester </p>
	</div>
	<div class="content-functions">
		<div>
			{{ Form::open(['action'=>'PostsController@index', 'method'=>'GET', 'class'=>'form-inline']) }} 
			{{ Form::text('searchKey', null, ['class' => 'form-control', 'placeholder' => "Search"]) }}
			{{ Form::submit('search') }}
			{{ Form::close() }}
		</div>
	</div>
	<div class="spacer" style="clear: both"></div>
@stop