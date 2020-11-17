<!DOCTYPE html>
<!--	pattern.php
 -->
<html lang = "en">
<head> 
  <title> pattern.php </title>
  <meta charset = "utf-8" />
</head>
<body>
<h3> Demonstating Pattern matching in PHP </h3>
<?php
  $name="nancy Acemian";
 	if(preg_match("/^N/",$name))
	  echo $name," begins with N.";
	else
	  echo $name," does not begins with N.";
	echo "<br />";
	
	$name="Nancy Acemian";
 	if(preg_match("/^N/",$name))
	  echo $name," begins with N.";
	else
	  echo $name," does not begins with N.";
	echo "<br />";
	
 	if(preg_match("/N/",$name))
	  echo $name," contains an N.";
	else
	  echo $name," does not contains an N.";
	echo "<br />";
	
	if(preg_match("/n/",$name))
	  echo $name," contains an n.";
	else 
	  echo $name," does not contains an n.";
	echo "<br />";
	
?>
</body>
</html>
