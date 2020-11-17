//This file will take input from display.php and save the settings in session variable and render the page according to the user settings
<?php

session_start();

if(isset($_POST['control']) && isset($_POST['font']) && isset($_POST['color'])) {

$elem = $_POST['control'];

$_SESSION[$elem.'_font'] = $_POST['font'];

$_SESSION[$elem.'_color'] = $_POST['color'];

if(isset($_POST['visible'])) {

$_SESSION[$elem.'_visible'] = '';

}

else {

$_SESSION[$elem.'_visible'] = 'none';

}

}

?>

<html>

<head>

<link rel="Stylesheet" href="css/login.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.container {

margin-top : 13%;

}

.err {

font-weight: bold;

color : #D31919;

}

body {

<?php

if(isset($_SESSION['back_color'])) {

?>

background : <?php echo $_SESSION['back_color']; ?>;

font-size : <?php echo $_SESSION['back_font'].'px'; ?>;

<?php } else { ?>

background: #007bff;

background: linear-gradient(to right, #0062E6, #33AEFF);

<?php } ?>

}

<?php

if(isset($_SESSION['email_color'])) {

?>

.email {

color : <?php echo $_SESSION['email_color']; ?>;

font-size : <?php echo $_SESSION['email_font'].'px'; ?>;

<?php if($_SESSION['email_visible'] == 'none')

echo "display : none;";

?> }

<?php } ?>

<?php

if(isset($_SESSION['password_color'])) {

?>

.password {

color : <?php echo $_SESSION['password_color']; ?>;

font-size : <?php echo $_SESSION['password_font'].'px'; ?>;

<?php if($_SESSION['password_visible'] == 'none')

echo "display : none;";

?>

}

<?php } ?>

<?php

if(isset($_SESSION['signin_color'])) {

?>

.signin {

background-color : <?php echo $_SESSION['signin_color']; ?> !important;

font-size : <?php echo $_SESSION['signin_font'].'px'; ?>;

<?php if($_SESSION['signin_visible'] == 'none')

echo "display : none;";

?>

}

<?php } ?>

</style>

</head>

<body>

<div class="container">

<div class="row">

<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

<div class="card card-signin my-5">

<div class="card-body">

<h5 class="card-title text-center">Sign In</h5>

<p class='err'></p>

<form class="form-signin" name="login-form">

<div class="form-label-group">

<input type="email" id="email" name="email" class="form-control email" placeholder="Email address" required autofocus>

<label for="email">Email address</label>

</div>

<div class="form-label-group">

<input type="password" id="password" name="password" class="form-control password" placeholder="Password" required>

<label for="password">Password</label>

</div>

<div class="custom-control custom-checkbox mb-3">

<label for="customCheck1"><input type="checkbox" id="customCheck1">

Remember password</label>

</div>

<!--<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>

<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>-->

</form>

<div class="form-signin">

<button class="btn btn-lg btn-primary btn-block text-uppercase signin">Sign in</button>

<hr class="my-4">

</div>

</div>

</div>

</div>

</div>

</div>

<div style="height : 30px !important; text-align : center">

<p style="color : white">New User? <a style="color : white; text-decoration : underline;" href="register.html">Register</a></p>

</div>

</html>