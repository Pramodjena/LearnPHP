<?php


echo "Cookies in PHP <br>";
// Cookies :

//  setcookie(name, value, exipry, path, domain, secure, httponly)

// Set cookie 
setcookie("name", "Pramod Sir", time() + 10);


// Get cookie: 

if (isset($_COOKIE["name"])) {
    echo "Welcome" . $_COOKIE["name"];
}
