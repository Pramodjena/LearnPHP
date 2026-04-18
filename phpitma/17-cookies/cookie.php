<?php


// Cookies in PHP :
// A cookie is a small piece of data stored in the user's browser by the server.

// Used for :
//1. login session 
//2. User preferences
//3. Tracking users 

// How to set cookie :
// stored in $_COOKIE(super global variable)
//   setcookie(name, value, expiry, path, domain, secure, httponly);
// Max: 4kb

$message = "";
setcookie("college", "LIT", time() + 3600);

$message = $_COOKIE["college"];
echo  "The cookie value: $message";
