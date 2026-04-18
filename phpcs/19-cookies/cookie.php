<?php

//Cookies :
// Cookies is a small piece of data that is stored in the user's browser by the server.


// How to set cookies :
// setcookie(name,value,expiry,path,domain,secure,httponly);
// Get :
// $_COOKIE(super global variable)

// setcookie("username", "Pramod", time() + 30);



// $message = $_COOKIE["username"];
// echo "The cookie is: $message";

$message = "";

// Set
if (isset($_POST["set"])) {

    $name =  $_POST["name"];
    $pass = $_POST["pass"];

    setcookie("username", $name, time() + 60);
    setcookie("password", $pass, time() + 60);

    $message = "Cookie has been set";
}

// Get 
if (isset($_POST["get"])) {
    if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
        $message = "Cookie value:" . $_COOKIE["username"] . "Password:" . $_COOKIE["password"];
    } else {
        $message = "Cookie not found";
    }
}

// Delete 
if (isset($_POST["delete"])) {
    if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
        setcookie("username", "", time() - 60);
        setcookie("password", "", time() - 60);
        $message = "Cookie has been deleted";
    } else {
        $message = "Cookie not found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in PHP</title>
</head>

<body>
    <h1>Cookies in PHP</h1>
    <form action="" method="post">
        <label for="name">Username:</label>
        <input type="text" name="name" id="name" placeholder="Enter username">
        <br>
        <br>
        <label for="pass">Password:</label>
        <input type="pass" name="pass" id="pass" placeholder="Enter password">
        <br>
        <br>
        <button type="submit" name="set">Set Cookie</button>
        <br>
        <button type="submit" name="get">Get Cookie</button>
        <br>
        <button type="submit" name="delete">Delete Cookie</button>
    </form>

    <h1><?php echo $message; ?></h1>
</body>

</html>