@extends('layouts.master')

@section('additionalStyle')
<link rel="stylesheet" type="text/css" href="/css/portfolio_style.css">
@stop

@section('content')
<h1 id="heading">My Work</h1>
<div class="webBox">
    <a href="http://whackamole.dev/index.php"><img class="resizeImg" src="/img/portfolio_Boondocks.png"></a>
    <h3>Whack-A-Mole Game</h3>
    <p class="extraspace"> Game was made with Javascript and PHP. The design concept was a result of my infactuation for both The Simpson and The Boondocks animation series. The "levels" were created by channging the underlying css attributes for each box and background. I wanted a fixed but viewable background so the opacity was set for the boxes to present a more transparent view for the user. Feel free to play a game or two. </p>
</div>

<div class="webBox">
    <a href="http://codeup.dev/dearDiary.php"><img class="resizeImg" src="/img/portfolio_Diary.png"></a>
    <h3>Dear Diary WebPage</h3>
    <p class="extraspace"> Who doesn't like the idea of an online diary? Ok, maybe I could count a few who would feel weiry of this but I did this page to test my ability of writing and retrieving information from a file. The "entries" are either saved to a file or presented on teh page. Session capabilities were not added but one feature I think would increase this sites utility.</p>
</div>


@stop