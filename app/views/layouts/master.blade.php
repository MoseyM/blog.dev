<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Margaret's Resume</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/animate.css">
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