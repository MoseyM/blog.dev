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
		}
		h1 {
			font-size: 2em;
			vertical-align: middle;
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
@stop