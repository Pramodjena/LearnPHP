<?php


// print_r($_GET);

// echo $_GET["name"];
// echo $_GET["pass"];


if (isset($_GET)) {
    if (!$_GET["name"]) {
        echo "Please enter credential";
    } else {
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["pass"];
    }
}


// Get :
// In get request the request will visible in the address bar 
// not secure 
// mostly used get data from server 


//Post:
// In post request the request will not visible in the address bar 
// secure 
// mostly used to create and update operations on server 

