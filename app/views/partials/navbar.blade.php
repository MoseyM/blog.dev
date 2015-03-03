<div class="navbar-top" id="navbar">
	<ul class="list-inline">
		<li>
			<button class="btn btn-link"><a href="{{ url('/') }}"> Home </a></button>
		</li>
	</ul>
	<ul class="list-inline right">
		<li>
			<button class="btn btn-link "><a id="#showWork" href="{{ action('HomeController@showMyWork') }}">My Work</a></button>
		</li>
		<li>
			<button class="btn btn-link"><a href="{{ action('HomeController@about') }}">Contact Me</a></button>
		</li>
		<li>
			<button class="btn btn-link"><a href="{{ action('HomeController@redirResume') }}">My Resume</a></button>
		</li>
		</div>
	</ul>
</div>
