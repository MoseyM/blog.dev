@extends('layouts.master')

@section('content')
<h1>New Blog Entry</h1>

	{{ Form::open(array('action' => 'PostsController@store')) }}
	<div class="form-horizontal">
		<input type="text" name="title" placeholder="title" autofocus>

		<textarea rows='10' cols="25" name="body" placeholder="story begins..."></textarea>
		
		<button class="btn btn-success"> Submit! </button>
		</div>

	{{ Form::close() }}

@stop

