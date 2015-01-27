<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="/css/template.css">
	</head>
	<body>
		@include('partials.navbar_template')
		<div class="container-fluid-custom">
			<div class="content-box">
				<div class="content-left"> 
					<p>Lorem ipsum dolor sit amet, ei qui enim commodo, harum noluisse iracundia cum cu, erroribus molestiae eu mel. Ea vim hinc minimum noluisse, vim no dolor veritus quaerendum. No pro vocibus invidunt appellantur. Quaeque appareat assueverit quo ex, an solet fierent conceptam eos, indoctum periculis id cum.</p>
				</div>
				<div class="content-right">
					<p>Lorem ipsum dolor sit amet, ei qui enim commodo, harum noluisse iracundia cum cu, erroribus molestiae eu mel. Ea vim hinc minimum noluisse, vim no dolor veritus quaerendum. No pro vocibus invidunt appellantur. Quaeque appareat assueverit quo ex, an solet fierent conceptam eos, indoctum periculis id cum.</p>
				</div>
				<div style="clear: both"></div>
			</div>
		</div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#loginModal').click(function() {
					$(this).modal('show');
				@yield('endscript')
			});
		</script>
	</body>
</html>