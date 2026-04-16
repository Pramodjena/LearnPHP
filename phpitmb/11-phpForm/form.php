<?php include("./include/nav.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js" defer></script>
</head>

<body>
    <div class="container">
        <h2>PHP Form</h2>
        <form action="./db.php" method="POST" enctype="multipart/form-data">
            <label for="name">Username:</label>
            <input type="text" name="name" id="name" placeholder="Enter name">
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" placeholder="Enter password">

            <label for="fileUpload">File Upload:</label>
            <input type="file" name="fileUpload" id="fileUpload">

            <input onclick="showAlert()" type="submit" value="Submit">
        </form>
    </div>
    <!-- <script src=""></script> -->
</body>

</html>

<?php include("./include/footer.php") ?>