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
			width: 300px;
			height: 100%;
			background: url(/img/head-right.png) no-repeat center center;
			background-size: cover;
			display: table-cell;
		}
		#profilePic-left {
			width: 300px;
			height: 100%;
			background: url(/img/head-left.png) no-repeat center center;
			background-size: cover;
			display: table-cell;
		}
		#aboutMe {
			font-size: 1.15em;
			height: 100vh;
			width: auto;
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
		}
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
			<h1 id="work">My Work</h1>
			<p> My name is Margaret. I was born and raised in a Liberian household in Fort Worth, TX. I then moved to Austin to obtain a Bachelors in Business Administration from the University of Texas. I realized that my heart was not in the area of study I had devoted a bulk of my college career in so I decided to look elsewhere. I then began to revisit my intest in web developement and am currently attending Codeup to obtain the skills I need to make this a career. </p>
		</div>
	</div>
@stop

