@extends('layouts.master')
@section('additionalStyle')
	<style type="text/css">
	body {
		background: url('/img/master/master_background.jpg') no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	</style>
@section('content')
	<div class="contentdiv">
		<h1 id="heading"> Resume </h1>
		<div id="experience" class="resumeSection">
			<h2>Experience</h2>
			<h4>Host N Dine</h4>
			<p><span class="expLocation">San Antonio, TX</span> - {{ date("Y") }}</p>
			<ul>
				<li>
					Handled the back-end migrations to set our database structure
				</li>
				<li>
					Created custom code for our hosting application that returned a grade based on the user’s input
				</li>
				<li>
					We utilized social media, email, <a href="https://github.com/MoseyM">GitHub</a> and other communication channels to ensure an open channel between one another
				</li>
			</ul>

			<h4>MoseJem</h4>
			<p><span class="expLocation">San Antonio, TX</span> - {{ date("Y") }}</p>
			<ul>
				<li>
					Handled the server-side to connect my IP address to my server
				</li>
				<li>
					Source code can be found on <a href="https://github.com/MoseyM/blog.dev">GitHub</a>
				</li>
				<li>
					Personal site used to display work and practice my web developing skills
				</li>
			</ul>

			<p>Studiohut, LLC</p>
			<p><span class="expLocation">Austin, TX</span> - April 2012 - December 2014</p>
			<p class="smallPara">Customer Relations and Service Manager</p>
			<ul>
				<li>
					Managed the business to customer connection for our company
				</li>
				<li>
					Assisted in the maintenance of our various social media sites. Including <a href="https://www.youtube.com/user/StudiohutPhotoVideo">Youtube</a>, <a href="https://www.facebook.com/studiohut">Facebook</a> and <a href="http://studiohut.blogspot.com/">Blogpost</a>.
				</li>
				<li>
					Processed special purchase orders between our customer and suppliers
				</li>
				<li>
					Assisted in maintaining full staff to fit the activity of the company
				</li>
			</ul>
		</div>
		<div id="skills" class="resumeSection">
			<h2>Skills</h2>
			@foreach($skills as $skill)
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill->level }}%">{{ $skill->skill }} : {{ $skill->level}}%</div>
				</div>
			@endforeach
		</div>
		<div id="education" class="resumeSection">
			<h2>Education</h2>
			<h4>CodeUp - LAMP Fullstack Web Development</h4>
			<h5>Linux, Apache, MySQL, PHP software development</h5>
			<ul>
				<li>
					Three month program centered around web development using the mentioned languages
				</li>
				<li>
					Over 700 hours of work and study to ensure solid/intermediate knowledge of the various programming languages mentioned above
				</li>
				<li>
					Created layouts using Laravel with the inclusion of databases and additional structure
				</li>
			</ul>
			<h4>University of Texas at Austin</h4>
			<h5>Major/Minor: Corporate Finance/Sociology</h5>
			<p>Focused on advising individuals of security options and investment strategies matching his or her risk aversion.</p>
		</div>
	</div>
@stop