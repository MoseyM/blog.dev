@extends('layouts.master')

@section('content')
<h1>Edit Blog Post</h1>

	{{ Form::model($post, array('action' => ['PostsController@store', $post->id], 'method'=>'PUT')) }}
	<div class="form-horizontal">
		<input type="text" name="title" placeholder="title" value={{{ $post->title}}}>

		<textarea rows='10' cols="25" name="body" placeholder="story begins...">{{{ $post->body }}} </textarea>
		<button class="btn btn-success"> Submit Changes! </button>
		</div>

	{{ Form::close() }}

@stop
