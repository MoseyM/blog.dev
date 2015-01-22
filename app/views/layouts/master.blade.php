<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> @yield('title') </title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<link href="/css/freelancer.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/animate.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/css/master_style.css">
		@yield('additionalStyle')
	</head>
	<body>
		<div class="container-fluid">
			@include('partials.topBar')
			<div class="content">
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
		</div>
		<!-- Javascript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		  	$(function() {
		  		$('#loginForm').addClass('animated bounceIn');
		  		$('.yes').addClass('animated zoomInRight');
				@yield('jquery')
			});
		</script>
	</body>
</html>