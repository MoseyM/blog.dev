<div class="navbar-top" id="navbar">
	<ul class="list-inline">
		<li>
			@if(!Auth::user())
			<button class="btn btn-default dropMenu" data-toggle="lModal" data-target="#lModal" id="login">LOGIN</button>
			@else
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle dropMenu" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				{{{ Auth::user()->username }}}
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('HomeController@whacka') }} ">WhackaMole</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('PostsController@index') }}">Blog</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="http://hostndine.com/">Host N Dine</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('HomeController@affordIt') }}">Can You Afford It?</a></li>
				</ul>
			</div>
		@endif
		</li>
<!-- Login Modal -->
		<div class="modal fade" id="lModal" tabindex="-1" rold="dialog" aria-labelledby="login" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Welcome Back! Login Please</h4>
					</div>
					<div class="modal-body">
						{{ Form::open(['action'=>'HomeController@dologin']) }}
						{{ Form::text('username') }}
						{{ Form::password('password')}}
						{{ Form::submit('Login!') }}
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
<!-- End of Modal -->
	</ul>
	<ul class="list-inline right">
		<li>
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle dropMenu" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				My Work
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('HomeController@whacka') }} ">WhackaMole</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('PostsController@index') }}">Blog</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="http://hostndine.com/">Host N Dine</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ action('HomeController@affordIt') }}">Can You Afford It?</a></li>
				</ul>
			</div>
		</li>
		<li>
			<a href="{{ action('HomeController@about') }}">Contact Me</a>
		</li>
		<li>
			<a href="{{ action('HomeController@redirResume') }}">My Resume</a>
		</li>
		</div>
	</ul>
</div>
