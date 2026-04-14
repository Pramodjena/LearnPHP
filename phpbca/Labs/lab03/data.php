<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data in PHP</title>
</head>

<body>
    <h1>Data getting from HTML Inputs</h1>

    <?php

    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["age"]) && isset($_POST["course"])) {

        $name =  $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $course = $_POST["course"]; 

        echo "<h2>$name</h2> <br>";
        echo "<h2>$email</h2> <br>";
        echo "<h2>$age</h2> <br>";
        echo "<h2>$course</h2> <br>";
    } else {
        echo "<h2>No data found !!</h2>";
    }

    ?>
</body>

</html>