@extends('layouts.master')

@section('sidebarList')
<ul>
    <li>
        <a href="#">About Me</a>
    </li>
    <li>
        <a href="#">My Work</a>
    </li>
    <li>
        <a href="#">Education</a>
    </li>
    <li>
        <a href="#">Contact Me</a>
    </li>
</ul>
@stop

@section('content')
<h1 id="adjustHead"> About Me </h1>
<img class="adjustjpg" src="/img/resizePofile.jpg">



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
});
@stop