@extends('layouts.master')
@section('additionalStyle')
	<style type="text/css">
		.homeContent {
			width: 720px;
			height: 100%;
			padding: 10px;
			margin: 0 auto;
			background-color: rgba(255,252,243, 1);
			border-radius: 7px;
		}
		#profilePic {
			width: 300px;
			height: 340px;
			background: url(/img/profile.jpg) no-repeat center center;
			background-size: cover;
			float: left;
			margin-right: 10px;
			margin-bottom: 10px;
		}
		#aboutMe {
			clear: right;
			font-size: 1.15em;
		}
		#aboutMe > h1 {
			text-align: center;
		}
		.profileRow {
			border-bottom: 2px solid black;
			margin-bottom: 5px;
		}
	</style>
@stop
@section('content')
	<div class="homeContent">
		<div class="profileRow">
			<div id="profilePic"></div>
			<div id="aboutMe">
			<h1>About Me</h1>
			<p> My name is Margaret. I was born and raised in a Liberian household in Fort Worth, TX. I then moved to Austin to obtain a Bachelors in Business Administration from the University of Texas. I realized that my heart was not in the area of study I had devoted a bulk of my college career in so I decided to look elsewhere. I then began to revisit my intest in web developement and am currently attending Codeup to obtain the skills I need to make this a career. </p>
			<p> Even though I have only been on this earth for 25 years or so, I have decided to seek happiness as my ultimate goal. Life is already hard and, in my honest opinion, there is no need to make it worse chasing things that will not make me happy. I am very excited for my life as of now and want to see what this adventure will bring. </p>
			</div>
			</div>
		<div class="profileRow">
			<h1 id="work">My Work</h1>
			<p> My name is Margaret. I was born and raised in a Liberian household in Fort Worth, TX. I then moved to Austin to obtain a Bachelors in Business Administration from the University of Texas. I realized that my heart was not in the area of study I had devoted a bulk of my college career in so I decided to look elsewhere. I then began to revisit my intest in web developement and am currently attending Codeup to obtain the skills I need to make this a career. </p>
		</div>
	</div>

@stop
