@extends('layouts.master')

@section('content')
	<h1>Edit Blog Post</h1>

	<div class='form'>
		{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method'=>'PUT')) }}
			{{ text('title', $post->title, ['placeholder'=>'title', 'class' => 'form-group']) }}
			{{ textarea('body', $post->body, ['placeholder'=>'Your story begins here...', 'class' => 'form-group', 'rows' => '10','cols'=> '25']) }}
			{{ Form::submit('Submit Changes!', ['class' => 'btn btn-success'])}}
		{{ Form::close() }}
	</div>
@stop
