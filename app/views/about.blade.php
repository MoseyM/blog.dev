@extends('layouts.master')

@section('content')
<h1 id="adjustHead"> About Me </h1>
<img class="adjustjpg" src="/img/resizePofile.jpg">
<p> My name is Margaret. I was born and raised in a Liberian household in Fort Worth, TX. I then moved to Austin to obtain a Bachelors in Business Administration from the University of Texas. I realized that my heart was not in the area of study I had devoted a bulk of my college career in so I decided to look elsewhere. I then began to revisit my intest in web developement and am currently attending Codeup to obtain the skills I need to make this a career. </p>
<quote> “Unhappiness lies in that gap between our talents and our expectations.” 
― Sebastian Horsley </quote>
<p> Even though I have only been on this earth for 25 years or so, I have decided to seek happiness as my ultimate goal. Life is already hard and, in my honest opinion, there is no need to make it worse chasing things that will not make me happy. I am very excited for my life as of now and want to see what this adventure will bring. </p>



@stop

@section('jquery')

$('#adjustHead').css({
	'text-align' : 'center',
	'margin-bottom' : '10px'
});

$('.adjustjpg').css({
	'float' : 'left',
	'clear' : 'right',
	'height' : '300px',
    'padding-right' : '10px'
});
@stop