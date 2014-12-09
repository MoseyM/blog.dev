<h1>We're Here</h1>

@foreach ($posts as $post)
	<div class="addedStyle">
		<h2 class="h2-left"><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}} </h2></a>
		<p> {{{ $post->body }}} </p>
		<span class="spanStyle"><a href="{{{ action('PostsController@edit', $post->id) }}}"> EDIT </a></span>
		<span class="timeStyle"> 
			{{ $post->created_at->format('l, M jS Y'); }}
		</span>
	</div>
@endforeach
<!-- this shows the numbers on the bottom of the list that tells how many pages you have -->
<p> {{ $posts->links() }} </p>

@stop

@section('jquery')
	$(function(){
		$(".spanStyle").hover(function() 
		{
		$(this).toggleClass("interest");
		});
	});
	
@stop