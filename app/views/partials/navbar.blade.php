<div class="navbar-top" id="navbar">
	<ul class="list-inline">
		<li>
			<button class="btn btn-link"><a href="{{ url('/index') }}"> Home </a></button>
		</li>
	</ul>
	<ul class="list-inline right">
		<li>
			@if(Request::is('index'))
				<button class="btn btn-link "><a id="#showWork" href="#workTitle">My Work</a></button>
			@else
			<button class="btn btn-link "><a id="#showWork" href="{{ url('/index#workTitle') }}">My Work</a></button>
			@endif
		</li>
		<li>
			<button class="btn btn-link"><a href='#' data-target="#contactModal" id="openContact">Contact Me</a></button>
		</li>
		<li>
			<button class="btn btn-link"><a href="{{ action('HomeController@redirResume') }}">My Resume</a></button>
		</li>
<!-- Contact Modal -->
	<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Contact Me</h4>
				</div>
				<div class="modal-body">
					{{ Form::open(['action' => 'HomeController@contactMe', 'class' => 'form-horizontal']) }}
					{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
					{{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) }}
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail Address']) }}
					{{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
					{{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) }}
					{{ Form::submit('Send') }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
<!-- End of Modal -->
	</ul>
</div>
