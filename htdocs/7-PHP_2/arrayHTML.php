<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>arrayHTML.php</title>
</head>
<body>
  <h1>Arrays are useful in HTML</h1>
  <div>
    <?php
      //first make an array of today's desserts
      $desserts = array("Apple pie a la mode",
                     "Rhubarb strawberry pie",
                     "Creme caramel",
                     "Praline almond cheese cake",
                     "Oreo cheese cake",
                     "Carrot cake",
                     "Banana split",
                     "Chocolate cake");
			// Display the content of the array as an array
			print " Content of array <br />";
			foreach ($desserts as $key => $value)
				print("[$key] => $value <br />");	
				
      //make the array into a numbered list
			print "<br />Content of array as a numbered list<br />";
      print "<ol>";
      foreach ($desserts as $dessert){
        print "  <li>$dessert</li>";
      } // end foreach
      print "</ol>";

      //make the array into a select object
			print "<br />Content of array as a select object<br />";
      print "<select name = \"dessert\"><br />";
      foreach ($desserts as $dessert){
        print "  <option value = \"$dessert\">$dessert</option>";
      } // end foreach
      print "</select>";
			print "<br /><br /><br /><br /><br />";
    ?>
  </div>  
</body>
</html>