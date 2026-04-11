<?php

//PHP Superglobals are built-in variables that are always accessible in all scopes!

// $GLOBALS - An array that contains references to all global variables of the script
// $_SERVER - Holds information about the web server including headers, paths, and script locations
// $_REQUEST - An array containing data from $_GET, $_POST, and $_COOKIE superglobals
// $_POST - An array of variables received via the HTTP POST method
// $_GET - An array of variables received via the HTTP GET method
// $_FILES - An array of items uploaded to the current script via the HTTP POST method (filename, type, size)
// $_ENV - Holds environment variables passed to the current script
// $_COOKIE - An array of variables passed to the current script via HTTP Cookies
// $_SESSION - An array of session variables


$name = "LIT";  // Global variable 
$age = 26;

function xyz()
{
    // global $name;
    // echo $name;

    // echo $GLOBALS["name"];
    // print_r($GLOBALS);
    echo $GLOBALS["age"];
}


xyz();
