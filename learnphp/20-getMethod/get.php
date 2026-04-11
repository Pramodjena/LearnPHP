<?php

// echo "Form has been submitted";

if (!$_GET) {
    echo "Error from get request";
} else {
    echo "Username:" . $_GET["name"];
    echo "<br>";
    echo "Password:" . $_GET["pass"];
}





// Get :
// In get request the request will visible in the address bar 
// not secure 
// mostly used get data from server 


//Post:
// In post request the request will not visible in the address bar 
// secure 
// mostly used to create and update operations on server 
