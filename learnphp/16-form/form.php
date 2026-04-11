<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <form action="getForm.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <br>
            <br>
            <input type="submit" name="save" value="Submit">
        </form>
</body>

<?php

if (isset($_POST['save'])) {
    echo $_POST['name'];
}

?>

</html>