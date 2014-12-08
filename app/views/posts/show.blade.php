@extends('layouts.master')

@section('content')
<h1>Blog Post</h1>

	<h2> {{{ $post->title}}} </h2>

	<p> {{{ $post->body }}} </p>

	{{ Form::model($post, array('action' => ['PostsController@destroy', $post->id], 'method'=>'DELETE', 'id'=>'delete-form')) }}
	{{Form::submit('Delete Post!', ['class'=>'btn btn-danger']) }}

	{{ Form::close() }}

@stop

@section('jquery')
<!-- need this to prevent behavior of button if user decides not to delete -->
<script type="text/javascript">
	$('#delete-form').submit(function(e) {
		if (!confirm("Are you sure you want to delete this post?!")) {
			e.preventDefault();
		}
	});
</script>
@stop