@extends('layouts.master')

@section('content')
	<div class="container-fluid-custom">
		{{ Form::open(['action'=>'HomeController@skills']) }}
		{{ Form::text('skill') }}
		{{ Form::text('level') }}
		{{ Form::submit('Save') }}
		{{ Form::close() }}
	</div>
@stop