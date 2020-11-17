<!DOCTYPE html>
<html>
<head>
    <title> PHP-printf </title>
    <meta charset = "utf-8" />
</head>
<body>

<h1>printf PHP page</h1>

<?php
function myTest() {
	static $x = 0;
	echo $x,"<br/>";
	$x++;
	}
	myTest();
	myTest();
	myTest();

?>
</body>
</html>