<html>
<head>
<title>Random Number </title>
</head>

<body>
 <p> The random number is {{{ $random }}} and your guess was {{ $guess }} </p>

 @if ($guess > $random) 
 	<h2>You are higher</h2>
 @elseif ($guess < $random) 
 	<h2>You are lower</h2>
 @else
 	<h2>Right on the Money!!!</h2>
 } ?> </p>
</body>
</html>