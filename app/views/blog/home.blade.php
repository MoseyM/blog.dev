@extends('layouts.master')
@section('additionalStyle')
	<style type="text/css">
		.blogIntro {
			margin-top: 40%;
			margin-left: 40%;
			padding: 10px;
		}
		#greeting {
			font-size: 2em;
		}
	</style>
	<script src="js/jquery.splashscreen.js"></script>
	<script src="js/script.js"></script>

@stop

@section('content')
	<div class="blogIntro">
		<h1 id="greeting">ldjfdsf;lj</h1>
	</div>
@stop

@section('endscript')
		$('.navbar-top').hide();
		$('#adjustContainer').css({"padding-top":0});
		{{-- Closes the doc ready tag from master php file --}}
		});	
@stop