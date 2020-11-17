<!DOCTYPE html>
<html>
<head>
    <title> PHP-Associative Array </title>
    <meta charset = "utf-8" />
</head>
<body>

<h1>Looping Through an Associative Array</h1>

<?php
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43","Steve"=>"25");

		echo "Peter is " . $age['Peter'] . " years old."."<br/>";
		$age['Steve']="19";
		foreach($age as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
?>
</body>
</html>