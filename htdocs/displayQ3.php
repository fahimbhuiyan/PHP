<?php

// Create a200 x200 canvas image

$canvas = imagecreatetruecolor(250,200);

// Allocate color for rectangle

$pink = imagecolorallocate($canvas,255,105,180);

// Draw rectangle with its color

imagerectangle($canvas,50,50,200,150, $pink);

// Output and free from memory

header('Content-Type: image/jpeg');

imagejpeg($canvas);

imagedestroy($canvas);

?>

