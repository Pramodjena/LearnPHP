<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Form</title>
</head>

<body>
    <h1>Post Form in PHP</h1>

    <form action="" method="post">
        <label for="name">Username:</label>
        <input type="text" name="name" id="name" placeholder="Enter name">
        <br>
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" placeholder="Enter password">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>

<?php

if (!isset($_REQUEST["submit"])) {
    echo "<h1>Enter something !!</h1>";
} else {
    echo "<h2>Form Data Details:</h2>";
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    echo "Username: $name <br>";
    echo "Password: $pass <br>";
}



?>