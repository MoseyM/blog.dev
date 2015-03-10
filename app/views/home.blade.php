@extends('layouts.master')
@section('additionalStyle')
	<style type="text/css">
		#openingSplash, #welcomeMsg {
			height: 300px;
			color: #000;
			font-family: 'PT Sans', sans-serif;
			margin: 20%;	
			padding: 20px;
			font-size: 1.25em;
			text-align: center;
		}
		#quote-author {
			font-family: inherit;
			font-size: .80em;
		}
	</style>
@stop
@section('content')
		<div id="openingSplash">
			<p id="splashMsg">"Work hard for what you want because it won't come to you without a fight. You have to be strong and courageous and know that you can do anything you put your mind to. If somebody puts you down or criticizes you, just keep on believing in yourself and turn it into something positive."</p>
			<span id="quote-author"> -Leah LaBelle </span>
		</div>

		<div id="welcomeMsg">
			<p>"Welcome!"</p>
		</div>
@stop
@section('endscript')
    var BV = new $.BigVideo();
	BV.init();
	if (Modernizr.touch) {
		BV.show('/img/home_img.jpg');
	} else {
		BV.show('/vids/dock.mp4',{ambient:true});
	}
});
$(window).load(function() {
	$('#openingSplash').addClass('animated pulse').show('slow', function() {
		    $(this).delay(12000).hide('slow', function() {
				$('#welcomeMsg').css("font-size","2.25em").addClass('animated fadeInDown').show('slow').delay(9000);
				window.location.replace('index');

			});
		});
@stop