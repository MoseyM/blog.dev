<div class="navbar-top" id="navbar">
	<ul class="list-inline">
		<li>
			<button class="btn btn-default dropMenu"><a href="{{ url('/') }}"> Home </a></button>
		</li>
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
