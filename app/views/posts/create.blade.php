@extends('layouts.master')

@section('content')
	<h1>New Blog Entry</h1>
	{{ Form::open(array('action' => 'PostsController@store', 'id' => 'sendData', 'class' => 'form-horizontal')) }}
		{{ text('title', null, ['placeholder' => 'Title', 'autofocus' => true]) }}
		{{ textarea('body', null,['placeholder' => 'Your story beings here...', 'rows' => '10','cols' => '25', 'data-body-analy' => Input::get('body')])}}
		{{ Form::hidden('sentiment', '', ['id' => 'sentiment']) }}
		{{ Form::hidden('confidence', '', ['id' => 'confidence']) }}
		{{ Form::submit('Submit!', ['class'=>'btn btn-success']) }}
	{{ Form::close() }}
@stop
@section('jquery')
	// API info need to revisit
	$('#sendData').submit(function(e){
		var body = $('textarea').data('body-analy').val();
		e.preventDefault();
			$.postJSON('http://sentiment.vivekn.com/api/batch/', {"body": body} , function(data) {
				$('#sentiment').val(data.sentiment);
		  	$('#confidence').val(data.confidence);
		  	$('#sendData').submit(); 
			});
	});
@stop