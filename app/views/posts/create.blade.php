@extends('layouts.master')

@section('content')
<h1>New Blog Entry</h1>

	{{ Form::open(array('action' => 'PostsController@store', 'id' => 'sendData')) }}
	<div class="form-horizontal">
		<input type="text" name="title" placeholder="title" autofocus>

		<textarea rows='10' cols="25" name="body" data-body-analy={{{ Input::get('body') }}} placeholder="story begins here..."></textarea>
		<input type="hidden" name="sentiment" id="sentiment">
		<input type="hidden" name="confidence" id="confidence">
		
		<button class="btn btn-success"> Submit! </button>
		</div>

	{{ Form::close() }}

@stop


