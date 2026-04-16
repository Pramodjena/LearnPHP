<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | PHP</title>
    <script src="./script.js" defer></script>
</head>

<body>
    <h1>Form in PHP</h1>
    <form action="./db.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter name">
        <br>
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" placeholder="Enter password">
        <br>
        <br>
        <input onclick="showAlert()" type="submit" value="Submit">
    </form>
</body>

</html>