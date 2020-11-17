<?php
session_start();
$x=2;
require_once 'abc.php';
?>

<p class="meta"><span class="date"> user registration?</span></p>

<div style="clear: both;">&nbsp;</div>

<div class="entry">

<p>

<form action="newuser.php" method="post" enctype="multipart/form-data">

<table>

            <tr>

                <td>Full name : </td>

                <td><input type="text" id="fn" name="fn">

                    <span id="err_fn" style="color:red;visibility: hidden;">* Required</span>

                </td>

            </tr>

            <tr>

                <td>Email : </td>

                <td><input type="text" id="e" name="e">

                    <span id="err_e" style="color:red;visibility: hidden;">* Example:abc@xyz.com</span>

                </td>

            </tr>

            <tr>

                <td>Username : </td>

                <td><input type="text" id="u" name="u">

                    <span id="err_u" style="color:red;visibility: hidden;">* Required</span>

                </td>

            </tr>

            <tr>

                <td>Password : </td>

                <td><input type="password" id="p" name="p" onkeyup="return checkPassword()">

                    <span id="err_p" style="color:red;visibility: hidden;">* 1 lowercase ,1 uppercase ,1 digit , 1 special character and minimum length 8</span>

                </td>

            </tr>

            

            <tr>

                <td>Retype password : </td>

                <td><input type="password" id="rp" name="rp" onkeyup="return checkPassword()">

                    <span id="nomatch" style="color:red;visibility: hidden; display:inline;">* password not matched</span>

                    

                </td>

            </tr>

            <tr>

                <td><input type="submit" value="Register" name="subReg" onclick="return check()"></td>

                <td><input type="reset" value="clear data"></td>

            </tr>

            <table>

</form>

</p>


</div>

<?php
require_once 'xyz.php';
?>
