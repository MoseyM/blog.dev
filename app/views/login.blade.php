@extends('layouts.master')
@section('additionalStyle')
<style type="text/css">
	.modal {
		display: block;
		margin-top: 150px;
	}
</style>

@stop

@section('content')
<div id='loginModal' class="modal fade" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="header">Welcome!</h4>
				</div>
			<div class="modal-body">
				<div class="form-horizontal">
					{{ Form::open(['action'=>'HomeController@dologin', 'id'=>'loginForm']) }}
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail']) }}
					{{ Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Password']) }}
					{{ Form::submit('Log In!') }}
					{{ Form::close() }}
					<p>Don't have an Account? <a href="{{ action('HomeController@register') }}"> Sign Up </a>
				</div>
			</div>
    </div> 
</div>
</div>
@stop

@section('endscript')
	<script type="text/javascript">
			$(function() {
				$('#loginModal').modal('show');
			@yield('endscript')
			});
		</script>
@stop