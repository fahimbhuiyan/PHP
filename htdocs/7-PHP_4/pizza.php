<?php require_once("sessionfns.php");

function processOrder()
{ $cr =  $_POST["crust"];
  if ( $cr ) {  $_SESSION['crust'] = $cr; }
  $top = $_SESSION['toppings'];
  $it = $_POST["top"];
  if ( $it && ! strstr($top,$it) ) 
  { if ( $top ) { $_SESSION['toppings'] = "$top, $it";  }
    else { $_SESSION['toppings'] = $it;  }
  }
}

if( empty($_POST['submit']) )                                   //A
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));   //B
  session_start();  // before any output                        //C
  $_SESSION['crust']="";                                        //D
  $_SESSION['toppings']="";
  include("head.inc");
  require("orderform.php");                                     //E
}
elseif ($_POST['submit'] == " Enter " )  // continuing           //F
{ session_start();  // before any output 
  processOrder();                                                //G
  include("head.inc");
  require("orderform.php");
}
elseif( $_POST['submit'] == " Done " )                           //H
{ session_start(); session_end(); 
//session_start();session_destroy();                               //I
  include("head.inc");
  echo '<p>Your order is complete.
        Thanks for your business.</p>';
  echo '<p><a href="">Another Order</a></p>';
} ?>
</body></html>
