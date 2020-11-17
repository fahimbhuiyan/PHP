<?php

if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
{
    $rawImage=$GLOBALS['HTTP_RAW_POST_DATA'];
    $removeHeaders=substr($rawImage, strpos($rawImage, ",")+1);
    $decode=base64_decode($removeHeaders);

    // check if the file already exists and keep adding +1 intil it's unique
    $i = 1;
    while(file_exists('uploads/image'.$i.'.jpg')) {           
        $i++;
    }

    $fopen = fopen( 'uploads/image'.$i.'.jpg', 'wb' );
    fwrite( $fopen, $decode);
    fclose( $fopen );

}

?>