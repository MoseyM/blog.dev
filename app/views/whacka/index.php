<!-- //Work on the scoreboard so points are accumulated when clicked.
 -->
<!DOCTYPE html>
<? require_once 'includes/includeIndex.php'; ?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/whacka.css">
	</head>
	<?php
		$scores = new HighScoresForGame();
		$scores->highscore = $scores->readScores();
		if(!empty($_POST) && isset($_POST)){	
			$scores->highscore[] = $_POST;
			$scores->writeScores(); 
		}?>
	<body>
	<div id="container">
	<div id='timer'><p> 30 Seconds Left</p></div>
	<div id='score'><p> </p></div>
		<div id="box-container">
			<div class="box-size">
				<img id='a' class="box-img" src="/img/boondocks_1.jpg" width="250" height="250">
			</div>

			<div class="box-size">
				<img id='b' class="box-img" src="/img/boondocks_2.jpg" width="250" height="250"></div>

			<div class="box-size">
				<img id='c' class="box-img" src="/img/boondocks_3.jpg" width="250" height="250"></div>

			<div class="box-size">
				<img id='d' class="box-img" src="/img/boondocks_4.jpg" width="250" height="250"></div>

			<div class="box-size">
				<img id='e' class="box-img" src="/img/boondocks_5.png" width="250" height="250"></div>

			<div class="box-size">
				<img id='f' class="box-img" src="/img/boondocks_6.jpg" width="250" height="250"></div>

			<div class="box-size">
				<img id='g' class="box-img" src="/img/boondocks_7.png" width="250" height="250"></div>

			<div class="box-size">
				<img id='h' class="box-img" src="/img/boondocks_8.jpg" width="250" height="250"></div>

			<div class="box-size">
				<img id='i' class="box-img" src="/img/boondocks_9.jpg" width="250" height="250"></div>
			</div>
		</div>

	<div class="footer">
		<h3> Enter your High Score</h3>
		<form method="$_POST" action="index.php" class="form">
			<div class="form-group">
				<input type="text" id="name footer" name="name" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<input type="text" id="score footer" name="score" value="" placeholder="score">
			</div>
			<div class="form-group">
				<input type="text" id="date footer" name="score" value="" placeholder="date">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" id="sendScore footer" name="sendScore" value="sendScore"></button>
			</div>
		</form>
	<table id="table">
		<tr>
		<th>Name</th>
		<th>Score</th>
		<th>Date</th>
		</tr>

		<?php
		if (isset($scores->highscore) && !empty($scores->highscore)) {
				foreach ($scores->highscore as $key => $score) {
					echo "<tr>";
						foreach ($score as $key2 => $value) {
							echo "<td> $value </td>";
						}
					echo "</tr>";
					}
			}
		?>
	</table>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	// rule: get at least 20points in 30 seconds. 2nd level 40 points in 25 seconds total 60points
	$(document).ready(function() {
var game = {
	score: 0,
	didTheyWin: function (level){
		if ((game.score>=20 && level== 1) || (level==2 && game.score>=30)) {
			if (level == 2 && game.score> 30) {
				alert("Champion!!!!!!!");
				clearInterval(timer);
				$('.footer').fadeIn('slow');
			}
			else if(level == 1 && game.score >=20){
			alert("Congrats! You have progressed to the next Round");
			clearInterval(timer);
				if (confirm('Continue')) {
					game.levelTwo();
				}
			}
		}
		else {
			alert("You Lose");
			clearInterval(timer);
			}
	},
	//changes the css of the game
	levelTwo:function() {
		imgPath = 'img/simpson_';
		extension = '.jpg';
		$('body').css({'background-image': "url(/img/simpson_home.jpg)"});
		$('img').each(function(index) {
			$(this).attr('src', imgPath+index+extension);
		});
		game.startGame(800, 25, 2);
	},

	startGame: function (tme, detinater, level) {
		$('div').off();
		var imgArray = $('img');
		 timer = setInterval(function () { 
				// Hide all previous boxes
				// Create a random num each time
				var randNum = Math.floor((Math.random()*9)+1);
				// With that random image
				// var randImg = 'img/boondocks_'+ randNum + '.jpg';
				var randImg = imgArray[randNum];
				//this is setting the random box number or index (with q)
				// var randBox = $('.box-size').eq(randNum);
				if(level == 1){
					if (randNum == 5 || randNum == 7) {
						var randomImage = "/img/boondocks_"+randNum+'.png';
					}
					else{
						var randomImage = "/img/boondocks_"+randNum+'.jpg';
					}
					$('.box-img').attr('src', randomImage);
				}
				$('img').hide();
				$(randImg).fadeIn().click(function() {
					 		game.score++;
					 		$('#score').html(game.score);
					 		$(this).off();
					 	});
				
				// $('randImg').
				// Decrement our timer and update html
				detinater--;
				if(level==2) {
					console.log(detinater);
				}
				$("#timer").html(detinater + "Seconds Left!");				
				if(detinater == 0){
					game.didTheyWin(level);
				}
			}, tme);
		}
		// code where condition to show form and table will appear with regards to the score.
}

var confirmToStart = confirm("Would you like to play?");
		if (confirmToStart == true) {
			//set this for levels. level 2 will be 800(8 secs) and timer set at 25 etc
			game.startGame(1000, 30, 1);
		};	
	});
		//code should select the exact box that was clicked and let it fadeIn then out after a delay.
		
	</script>
	</body>
</html>