<!DOCTYPE html>
<html lang="en">
<head>
    <title>Margaret's Resume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/master_style.css">
	@yield('additionalStyle')
</head>
<body>
<div class="container">
	<div id="topbar">
		<div class="linkBar">
			<h3><a href="{{{ action('PostsController@index') }}}">Recent Post</a></h3>
		</div>
		
		<div class="linkBar">
			<h3><a href="{{{ action('PostsController@create') }}}">New Post</a></h3>
		</div>
		    	
		<div class="linkBar">
	       	<h3><a href="{{{ action('HomeController@redirPortfolio') }}}">Portfolio</a></h3>
		</div>
		
		<div class="linkBar">
			<h3><a href="{{{ action('HomeController@redirResume') }}}">Resume</a></h3>
		</div>

		<div class="linkBar">
			<h3><a href="{{{ action('HomeController@about') }}}">About Me</a></h3>
		</div>
	</div>

	<div class="content">
    	@yield('content')
    </div>
</div>
    <!-- Latest compiled and minified JavaScript -->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		@yield('jquery')
	</script>

</body>
</html>