<?php
// echo "Post request";
// print_r($_POST);

// if ($_POST) {
//     foreach ($_POST as $key => $value) {
//         echo "User => $key : $value <br>";
//     }
// } else {
//     echo "Error from post request";
// }

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request");
}

if (!empty($_POST)) {

    foreach ($_POST as $key => $value) {

        // Sanitize key and value (prevent XSS)
        $safeKey = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');

        // Never show raw password
        if ($safeKey === 'password') {
            $safeValue = '********'; // mask password
        } else {
            $safeValue = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }

        echo "User => $safeKey : $safeValue <br>";
    }
} else {
    echo "Error from post request";
}
