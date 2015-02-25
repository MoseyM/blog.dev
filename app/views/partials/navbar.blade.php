<div class="navbar-top" id="navbar">
	<ul class="list-inline">
		<li>
			<button class="btn btn-default dropMenu"><a href="{{ url('/') }}"> Home </a></button>
		</li>
	</ul>
	<ul class="list-inline right">
		<li>
			<a id="#showWork" href="{{ action('HomeController@showMyWork') }}">My Work</a>
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
