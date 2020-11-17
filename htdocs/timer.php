<?php
if(!isset($_COOKIE['testCookie'])){

    $time = time()+60;
	$timeMemo = (String)$time;
	//sets cookie with expiration time defined above
	setcookie("testCookie", "" . $timeMemo . "", $time);
}
?>
<html>
<head>
</head>
<body>

<p id="demo"></p>

<script>

	// Update the count down every 1 second
	var x = setInterval(function() {

  	// Get today's date and time
  	var now = new Date().getTime();
    var seconds = Math.floor(now / 1000);
    var cookie = document.cookie.substring(11)-seconds;
    document.getElementById("demo").innerHTML =  "The Cookie will expire in " + cookie + " seconds.";

  // If the count down is over, write some text 
  if (cookie <= 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "The cookie has EXPIRED.";
  }
}, 1000);
</script>

</body>
</html>
