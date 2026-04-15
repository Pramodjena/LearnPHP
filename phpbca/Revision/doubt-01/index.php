<?php include("./include/header.php"); ?>

<div class="container">
    <h2>PHP Form</h2>
    <form action="./data.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter name">
        <label for="pass">Password:</label>
        <input type="text" name="pass" id="pass" placeholder="Enter name">
        <label for="fileUpload">File:</label>
        <input type="file" name="fileUpload" id="fileUpload">

        <input type="submit" name="submit" value="Submit" onclick="showAlert()">
    </form>
</div>


<?php include("./include/footer.php"); ?>