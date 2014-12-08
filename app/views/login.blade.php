@extends('layouts.master')
@section('additionalStyle')
<style type="text/css">
	.form-control {
		margin-bottom: 10px;
	}
</style>

@stop

@section('content')

{{ Form::open(['action'=>'HomeController@dologin']) }}

{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail']) }}
{{ Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Password']) }}

{{ Form::submit('Log In!') }}

{{ Form::close() }}

@stop