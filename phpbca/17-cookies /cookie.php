<?php


// Cookies : 
// Cookies is a small piece of data that stores inside user's browser by the server.
// How to set cookies 
//    setcookie(name, value, expiry, path, domain, secure, httponly)

// How to get cookies 
// $_COOKIE[] // super global variable
// Max size : 4KB 

// setcookie("username", "Litindia", time() + 30);
// setcookie("password", 1234567890, time() + 30);

// echo "Cookies in progress...";
// echo time();


// Set and Get Cookies :

if (isset($_POST["name"]) && isset($_POST["pass"])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    // echo "username: $name <--> password: $pass";

    setcookie("username", $name, time() + 3600);
    setcookie("password", $pass, time() + 3600);

    echo "<script>alert('Cookies set !!')</script>";
}

// Get 
if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
    $name = $_COOKIE["username"];
    $pass = $_COOKIE["password"];

    echo "<h2>$name</h2>";
    echo "<h2>$pass</h2>";
}
// Delete :
if (isset($_POST["delete"])) {

    if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {

        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);
    }

    echo "<script>alert('Cookies deleted !!')</script>";
}



?>

<!-- HTML FORM  -->

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
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" placeholder="Enter password">
        <br>
        <br>
        <input type="submit" value="Submit">
        <br>
        <input type="submit" name="delete" value="Delete">
    </form>

</body>

</html>