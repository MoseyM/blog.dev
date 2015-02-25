@extends('layouts.master')

@section('additionalStyle')
	<style type="text/css">
	.work {
	margin-right: auto;
	margin-left: auto;
	padding: 5px;
	width: 700px;
	}
	.work>table {
		vertical-align: middle;
	}
	.individualClass {
		max-width: 150px;
		max-height: 150px;
		float: left;
		margin-right: 5px;
		border: black solid;
	}
	</style>
@stop

@section('content')
	@include('partials.mywork')
@stop

@section('endscript')
$('.individualClass').hide();
$('.individualClass').each(function() {
	$(this).delay(1100).show('slow');
});
@stop