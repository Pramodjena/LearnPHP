<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload in PHP</title>
</head>

<body>
    <h1>File Upload</h1>
    <form action="./db.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">File Upload:</label>
        <input type="file" name="fileUpload" id="fileUpload">

        <input type="submit" value="Submit">
    </form>
</body>

</html>