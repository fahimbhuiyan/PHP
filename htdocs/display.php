

<?php
/*
/This file presents a menu to the user which lets him/her chose the element to be styled and the styles to be applied on them
 ------------------------------------------------------------------------------
// Assignment: #03
// Written by: Fahim Bhuiyan 40091942
// For SOEN 287 Section SC – Summer 2019
// Decription: here is a display ppage that will ask for select box, slider, colorpicker and checkbox. 
// at first, the display will present to user which lets him choose the element and color to change.
// then in the process file, it will redirect him and change it.
 -----------------------------------------------------------------------------
*/

session_start();

?>

<!doctype html>

<html>

<head>

<title>Display Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>

body {

margin : 0% 10% 0% 10%;

}

fieldset {

border : 2px solid gray;

box-shadow : 1px 1px 5px 3px rgba(0,0,0,0.3);

border-radius : 7px;

padding : 15px;

}

</style>

</head>

<body>

<fieldset>

<legend>Controls</legend>

<form name="form1" action="process.php" method="POST">

<div class="form-group">

<label for="control">Select a Control To Style</label>

<select class="form-control" name="control" required>

<option value="back">Background</option>

<option value="signin">Sign In Button</option>

<option value="email">Email Input</option>

<option value="password">Password Input</option>

</select>

</div>

<div class="form-group">

<label for="font-size">Select the font-size</label>

<input class="form-control" type="range" name="font" min="8" max="42" required>

</div>

<div class="form-group">

<label for="color-picker">Select the Color</label>

<input class="form-control" type="color" name="color" required>

</div>

<div class="form-group">

<label for="visibility"><input type="checkbox" name="visible"> Select the visibility</label>

</div>

<input type="submit" class="btn btn-primary" value="Submit">

</form>

</fieldset>

<body>

</html>