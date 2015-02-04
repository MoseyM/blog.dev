<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="/css/template.css">
		<link rel="stylesheet" href="/css/animate.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<title>@yield('title')</title>
		@yield('additionalStyle')
	</head>
	<body>
		@if (!Request::is('posts*'))
			@include('partials.navbar')
		@else
			@include('partials.blog_navbar')
		@endif
		<div class="container-fluid-custom" id="adjustContainer">
				@if (Session::has('successMessage'))
					<div class="alert alert-success yes">
				{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
					<div class="alert alert-danger no">{{{ Session::get('errorMessage') }}}</div>
				@endif
				<p id="errorsMsg">
					{{ (!empty($errors)) ? $errors->first('title', '<span class="help-block">:message</span>') : ''}}
					{{ (!empty($errors)) ? $errors->first('body', '<span class="help-block">:message</span>') : ''}}
				</p>
			@yield('content')
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		var bodyPadding = $('#navbar').height();
		var wholeScreen = document;
		var scrHeight = Math.max(
	        wholeScreen.body.scrollHeight, wholeScreen.documentElement.scrollHeight,
	        wholeScreen.body.offsetHeight, wholeScreen.documentElement.offsetHeight,
	        wholeScreen.body.clientHeight, wholeScreen.documentElement.clientHeight
    	);
		var windowHeight = $(window).height();
		function set_container_height() 
		{
			if (scrHeight >= windowHeight) {
	    		$('#adjustContainer').height(scrHeight).css({"padding-top":bodyPadding});
	    	} else {
	    		$('#adjustContainer').height(windowHeight).css({"padding-top":bodyPadding});
	    	}
	  	}
	  	// $('#loginForm').addClass('animated bounceIn'); EXAMPLE use of Animate
		$(function() {
			$(window).bind('resize', set_container_height);
			set_container_height();
			$('#login').click(function(e) {
				$('#lModal').modal('toggle');
			});
			@yield('endscript')
		});
		</script>
	</body>
</html>