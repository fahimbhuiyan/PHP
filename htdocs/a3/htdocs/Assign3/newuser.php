<?php

session_start();

$x=2;

require_once 'abc.php';

?>

<p class="meta"><span class="date">user registration</span></p>

<div style="clear: both;">&nbsp;</div>

<div class="entry">

<p>

<?php

if(isset($_POST["subReg"]))

{

$fullname=$_POST["fn"];

$username=$_POST["u"];

$password=$_POST["p"];

$email=$_POST["e"];

require_once 'dbconfig.php';

$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);

$db->query("insert into signup(Fullname,UserName,Password,Email) values('$fullname','$username','$password','$email')");

if($db->affected_rows>0)

{

echo "User Registration Successfull. ";

echo "<br>go to login page.";

}

$db->close();

}

?>

</p>

</div>

<?php

require_once 'xyz.php';

?>          