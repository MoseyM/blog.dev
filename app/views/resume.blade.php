@extends('layouts.master')
@section('additionalStyle')
<link rel="stylesheet" type="text/css" href="css/resume_style.css">
@stop

@section('content')
<h1 id="adjustHead"> Resume </h1>
<div class="container-fluid">
<h2>Current Experience/Work</h2>
<!-- This is where a div with my work would go -->
<div id="experience">
	<h2>Education</h2>
	<p>CodeUp - LAMP Fullstack Web Development</p>
	<p class="smallPara">Linux, Apache, MySQL, PHP software development</p>
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
	<p>Studiohut, LLC</p>
	<p class="smallPara">Customer Relations and Service Manager</p>
	<ul>
		<li>
			Managed the business to customer connection for our company
		</li>
		<li>
			Assisted in the maintenance of our various social media sites. Including Youtube, Facebook and Blogpost.
			<!-- Maybe include links to the channels -->
		</li>
		<li>
			Processed special purchase orders between our customer and our suppliers
		</li>
		<li>
			Assisted in maintaining full staff to fit the activity of the company
		</li>
	</ul>
</div>
</div>
@stop