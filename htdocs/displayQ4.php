<html>

<head>

<title>Counter to visit sites</title>

</head>

<body>

<?php

/* the existence of the cookie is checked here */

if (!isset($_COOKIE['count']))

{

/* The value of the cookie */

$myCookie = 1;

/* setting cookie with initial value 1 */

setcookie("count", $myCookie, time()+60, "/");

/* The initial counter value is printed here */

echo "<b>Number of Visits: ", $myCookie ," </b>";

}

else

{

/* The counter value is incremented here */

$myCookie = ++$_COOKIE['count'];

/* The values of thecounter based on the cookie is incremented here */

setcookie("count", $myCookie, time()+60, "/");

/* Printing the initial counter value */

echo "<b>Number of Visits: ", $myCookie ," </b>";

}

?>

</body>

</html>