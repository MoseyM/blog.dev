@extends('layouts.master')
@section('additionalStyle')
	<style type="text/css">
		body, .btn-link {
			background: #FFFEF9 !important;
			color: #000;
		}
		.homeContent {
			width: 100%;
			height: 100%;
			border-radius: 7px;
		}
		.container-fluid-custom {
			padding-left: 0 !important;
			padding-right: 0 !important;
		}
		#profilePic-right {
			width: 25%;
			height: 100%;
			background: url(/img/head-right.png) no-repeat center center;
			background-size: cover;
			display: table-cell;
		}
		#profilePic-left {
			width: 25%;
			height: 100%;
			background: url(/img/head-left.png) no-repeat center center;
			background-size: cover;
			display: table-cell;
		}
		#aboutMe {
			font-size: 1.15em;
			height: 100vh;
			width: 50%;
			padding-left: 30px;
			padding-right: 30px;
			display: table-cell;
		}
		#aboutMe > h1 {
			text-align: center;
		}
		.profileRow {
			height: 100vh;
			margin-bottom: 5px;
		}
		.profileRow:nth-of-type(2) {
			padding-top: 54px !important;
			padding-right: 10px;
		}
/*Work Section*/
		#workTitle {
			text-align: center;
		}
		#workRow {
			width: 150px;
			display: inline-block;
			float: left;
			margin-right: 20px;
		}

		.workDescription {
			height: 465px;
			clear: right;
			overflow: hidden;
		}
		.workBox {
			width: 150px;
			height: 150px;
			display: inline-block;
			margin-right: 10px;
			border-radius: 10px;
			background-size: cover;
		}
		#blog {
			background-image: url('/img/work/work-blog.png');
		}
		#whacka {
			background-image: url('/img/work/work-whacka.png');
		}
		#can {
			background-image: url('/img/work/work-can.png');
		}
		.inline-title {
			font-size: 1.25em;
			color: red;
		}
/*end Work Section*/
	</style>
@stop
@section('content')
	<div class="homeContent">
		<div class="profileRow">
			<div id="profilePic-left"></div>
			<div id="aboutMe">
				<h1>About Me</h1>
				<p> My name is Margaret. I was born and raised in a Liberian household in Fort Worth, TX. I then moved to Austin to obtain a Bachelors in Business Administration from the University of Texas. I realized that my heart was not in the area of study I had devoted a bulk of my college career in so I decided to look elsewhere. I then began to revisit my intest in web developement and am currently attending Codeup to obtain the skills I need to make this a career. </p>
				<p> Even though I have only been on this earth for 25 years or so, I have decided to seek happiness as my ultimate goal. Life is already hard and, in my honest opinion, there is no need to make it worse chasing things that will not make me happy. I am very excited for my life as of now and want to see what this adventure will bring. </p>
			</div>
			<div id="profilePic-right"></div>
		</div>
		<div class="profileRow">
			<h1 id="workTitle">My Work</h1>
			<div id="workRow">
				<a href="#" class="workLink"><div class="workBox" id="blog"></div></a>
				<a href="#" class="workLink"><div class="workBox" id="whacka"></div></a>
				<a href="#" class="workLink"><div class="workBox" id="can"></div></a>
			</div>
{{-- Hidden Work descriptions --}}
			<div class="workDescription">
				<div class="pop blog">
					<h2>Blog</h2>
					<p><span class="inline-title">What Is It?</span> It is the ultimate blogging experience. It is a mix between a diary and blog where the user can make some posts private and other seen publicly. There are a plethora of blogs out there and this does not fall into the crowd. It is entirely geared with the user in mind and not the content. So share, enjoy, experience.</p>

					<span>Software Used</span>
					<ul>
						<li>Laravel 4.2.11</li>
						<li>PHP</li>
						<li>Javascript</li>
					</ul>
					<a href="{{ action('HomeController@showBlog') }}"><button class="btn btn-success">Visit</button></a>
				</div>
				<div class="pop whacka">
					<h2>WhackaMole Game</h2>
					<span class="inline-title">What Is It?</span><p>Taking the classic game and refiguring it with modern day cartoons. The structure is simple. Click enough heads within the alloted time to get enough points to progress to the next round. Simple as that...or is it?</p>

					<span>Software Used</span>
					<ul>
						<li>PHP</li>
						<li>Javascript</li>
						<li>mySQL</li>
					</ul>
					<a href="{{ action('HomeController@whacka') }}"><button class="btn btn-success">Visit</button></a>
				</div>
<div class="pop can">
	<h2>Can You Afford It</h2>
	<span class="inline-title">What Is It?</span><p>using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>

	<span>Software Used</span>
	<ul>
		<li>Established</li>
		<li>Margaret</li>
		<li>Moseyee</li>
		<li>Stuff</li>
	</ul>
	<button class="btn btn-success">Visit</button>
				</div>
			</div>
		</div>
	</div>
@stop

@section('endscript')
$('.pop').hide();
$(".workLink").click(function(event) {
	$('.pop').hide();
	event.preventDefault();
	var getid = $(this).children('div').attr('id');
	$('.' + getid).addClass('animated fadeInDown').show();
	
});
@stop



