<!DOCTYPE html>
<html lang="en">
<head>
    <title>Margaret's Resume</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
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
		<div class="alert alert-danger">
{{{ Session::get('errorMessage') }}}</div>
	@endif

	<p id="errorsMsg">
		{{ (!empty($errors)) ? $errors->first('title', '<span class="help-block">:message</span>') : ''}}
		{{ (!empty($errors)) ? $errors->first('body', '<span class="help-block">:message</span>') : ''}}
	</p>
    	@yield('content')
    </div>
</div>
    <!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	@yield('jquery')

	</script>

</body>
</html>