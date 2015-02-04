@extends('layouts.master')
@section('title') 
	The Blog Experience 
@stop
@section('additionalStyle')
	<style type="text/css">
		.contentdiv {
			background: none;
		}
		* {
			color: #81C784;
		}
		.contentdiv>h1 {
			color: #00E676;
		}
		.posts {
			width: 65%;
			border-right: 2px dashed #FFF9C4;
			float: left;
			padding-right: 5px;
		}
		.links {
			max-width: 35%;
			float: left;
			padding-left: 5px;
		}
	</style>
@stop
@section('content')
	<div class="contentdiv">
		<h1>The Blog Experience</h1>
		<div class="posts">
			@foreach($posts as $post)
				<h4> <a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}} </a></h4>
			@endforeach

			<p> {{ $posts->links() }} </p>
		</div>
		<div class="links">
			{{ Form::open(['action'=>'PostsController@index', 'method'=>'GET', 'class'=>'form-inline']) }} 
			{{ Form::text('searchKey', null, ['class' => 'form-control', 'placeholder' => "Search"]) }}
			{{ Form::submit('search') }}
			{{ Form::close() }}
		</div>
		<div style="clear: both"></div>
	</div>
@stop

@section('endscript')
	$('.container-fluid-custom').css({"background-image": "url('/img/blog_images/blog_index.jpg')"});
@stop