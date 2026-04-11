<?php

// Cookies : 
// A cookie is a small piece of data stored in the user’s browser by the server.

// 👉 Used for:
// Login sessions
// User preferences
// Tracking users

// setcookie(name, value, expiry, path, domain, secure, httponly);

// setcookie("username", "Pramod", time() + 3600);

// "username" → cookie name
// "Pramod" → value
// time() + 3600 → expires in 1 hour


// Set cookie
// setcookie("user", "Pramod", time() + 3600);

// Access cookie :
// if (isset($_COOKIE["user"])) {
//     echo "Welcome " . $_COOKIE["user"];
// }
