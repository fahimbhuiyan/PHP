<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />

<title>webapp</title>

<link href="style.css" rel="stylesheet">

<script>

function check()

{

var fv=true

var str=""

var pat=""

                

                //Full name

str=document.getElementById("fn").value;

pat=/^[a-zA-Z0-9]{5,10}$/

if(!pat.test(str))

{

document.getElementById("err_fn").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("err_fn").style.visibility="hidden";

if(fv==true)

fv=true;

}

//username

str=document.getElementById("u").value;

pat=/^[a-zA-Z0-9]{5,10}$/

if(!pat.test(str))

{

document.getElementById("err_u").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("err_u").style.visibility="hidden";

if(fv==true)

fv=true;

}

                

                

                //email

str=document.getElementById("e").value;

pat=/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/

if(!pat.test(str))

{

document.getElementById("err_e").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("err_e").style.visibility="hidden";

if(fv==true)

fv=true;

}

                

//password              

str=document.getElementById("p").value;

if(str=="")

{

document.getElementById("err_p").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("err_p").style.visibility="hidden";

if(fv!=false)

fv=true;

}           

                

return fv;

}

            

            //onkeyup event for the match password

            function checkPassword()

            {

str=document.getElementById("p").value;

pat=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/

if(!pat.test(str))

{

document.getElementById("err_p").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("err_p").style.visibility="hidden";

if(fv!=false)

fv=true;

}   

    

                str1=document.getElementById("rp").value;

if(str1!=str)

{

document.getElementById("nomatch").style.visibility="visible";

fv=false;

}

else

{

document.getElementById("nomatch").style.visibility="hidden";

if(fv!=false)

fv=true;

}

return fv;

            }

</script>

</head>

<body>

<div id="wrapper">

    <div id="header">

        <div id="logo">

            <h1><a href="#">webapp</a></h1>

            <p>new way to develop website...</p>

        </div>

    </div>

    <!-- end #header -->

    <div id="menu">

        <ul>

<li <?php if($x==1){echo "class='current_page_item'";} ?>><a href="index.php">Home</a></li>

<li <?php if($x==2){echo "class='current_page_item'";} ?>><a href="newuser_form.php">New User</a></li>                      

            <li><a href="#">About</a></li>          

            <li><a href="#">Contact</a></li>

        </ul>

    </div>

    <!-- end #menu -->

    <div id="page">

    <div id="page-bgtop">

    <div id="page-bgbtm">

        <div id="content">

            <div class="post">

                <h2 class="title"><a href="#">Webapp portal </a></h2>

