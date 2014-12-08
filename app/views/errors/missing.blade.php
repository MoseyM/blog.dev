@extends('layouts.master')
@section('additionalStyle')
<style type="text/css">
h1 {
	color: red;
}
</style>
@stop 

@section('content')
<h1 id="errorHeading"> Directory was not found</h1>
@stop

@section('jquery')
$('#errorHeading').css("text-decoration", "blink");
@stop