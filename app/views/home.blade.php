<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/bigvideo.css">
	</head>
	<body>
		<div class="container-fluid">
			<p id="openingSplash">Test</p>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery-ui.js"></script>
		<script src="/js/jquery-ui.min.js"></script>
		<script src="/js/modernizr.custom.73952.js"></script>
		<script src="/js/video.js"></script>
		<script src="/js/bigvideo.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#openingSplash').hide();
				var BV = new $.BigVideo();
			    BV.init();
			    BV.show('/vids/shopping.mp4',{ambient:true});
			});
			$(window).load(function() {
				$('#openingSplash').show('fast', function() {
					$(this).addClass('animated pulse').delay(15000).hide('slow');
				});
			});
		</script>
	</body>
</html>