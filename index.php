<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "itsmejaikishan@gmail.com";
    $to = "indoriajaikishan@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
    if(function_exists('mail')) {
        echo "PHP mail() function is enabled";
    }
    else {
        echo "PHP mail() function is not enabled";
    }

