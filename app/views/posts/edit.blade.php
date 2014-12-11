@extends('layouts.master')

@section('content')
<h1>Edit Blog Post</h1>

<div class='form'>
	{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method'=>'PUT')) }}
	<div class="form-group">
		<input type="text" name="title" placeholder="title" class="form-group" value={{{ $post->title}}}>
		</div>
	<div class="form-group">
		<textarea rows='10' cols="25" name="body" class="form-group" placeholder="story begins...">{{{ $post->body }}} </textarea>
		</div>
	<div class="form-group">
		<button class="btn btn-success"> Submit Changes! </button>
		</div>

	{{ Form::close() }}
</div>
@stop
