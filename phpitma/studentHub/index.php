<?php include("includes/header.php"); ?>

<h3>Student Registration</h3>

<form action="register.php" method="POST" enctype="multipart/form-data">

    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Email: <input type="email" name="email"><br><br>
    Roll No: <input type="text" name="roll"><br><br>
    Course: <input type="text" name="course"><br><br>
    College: <input type="text" name="college"><br><br>

    Photo: <input type="file" name="photo"><br><br>

    <button type="submit" onclick="showAlert()">Submit</button>

</form>

<?php include("includes/footer.php"); ?>