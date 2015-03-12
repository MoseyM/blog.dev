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
@section('endscript')
    var BV = new $.BigVideo();
	BV.init();
	if (Modernizr.touch) {
		BV.show('/img/home_img.jpg');
	} else {
		BV.show("/vids/splash.mp4",{ambient:true});
	}
	window.setTimeout(function() {
		window.location.replace('index');
		}, 17000);
@stop