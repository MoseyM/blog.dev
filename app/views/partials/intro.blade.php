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
<div class="container-fluid">

	@include('partials.topBar')

	<div class="content">

		@if (Session::has('successMessage'))
			<div class="alert alert-success">
		{{{ Session::get('successMessage') }}}</div>
		@endif

		@if (Session::has('errorMessage'))
			<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif

		<p id="errorsMsg">
			{{ (!empty($errors)) ? $errors->first('title', '<span class="help-block">:message</span>') : ''}}
			{{ (!empty($errors)) ? $errors->first('body', '<span class="help-block">:message</span>') : ''}}
		</p>
	    <!-- Beginning of partial for intro -->
	    <section id="intro" class="sectIntro">
	    @include('partials.intro')
	    </section>
	    <section>
			@section('content')
	    </section>

	    	
    </div>
</div>
    <!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function handleResize(){
    $("#intro").height($(window).height());
	}
	$(window).bind('resize', handleResize);

	@yield('jquery')

	</script>

</body>
</html>