@extends('layouts.master')

@section('additionalStyle')
	<style type="text/css">
		.work {
			margin-right: auto;
			margin-left: auto;
			margin-top: 20px;
			width: 625px;
		}
		.individual-Work {
			width: 300px;
			height: 300px;	
			float: left;
			margin-right: 5px;
			border: #FFF solid 1px;
			background: rgba(255, 222, 254, 0.8);
		}
		.individual-Work  p {
			display: inline-block;
			vertical-align: middle;
			height: 100%;
			width: 100%;
			text-align: center;
			font-size: 2em;
			padding-top: 40%;
		}
		.individual-Work:hover {
			background: rgba(142, 0, 235, 0.7);
		}

		h1 {
			font-size: 2em;
			height: 80px;
			width: 100%;
		}
	</style>
@stop

@section('content')
	<h1 align="center">My Work</h1>
	<div class="work">
		@include('partials.mywork')
	</div>
@stop

@section('endscript')
$('.individual-Work').hide();
$('.individual-Work').each(function() {
	$(this).delay(1100).show('slow');
});
$('.individual-Work').mouseover(function() {
	$(this).children('p').toggleClass('animated flip');
});
@stop