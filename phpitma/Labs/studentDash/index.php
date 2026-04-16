<?php include("./include/header.php")   ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="./css/style.css" />
  <script src="./js/script.js"></script>
</head>

<body>
  <div class="container">
    <h3>Student Registration</h3>
    <form action="register.php" method="POST" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Enter name" />
      <label for="age">Age:</label>
      <input type="number" name="age" placeholder="Enter age" />
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Enter email" />
      <label for="roll"> Roll No: </label>
      <input type="text" name="roll" placeholder="Enter roll" />
      <label for="course"> Course: </label>
      <input type="text" name="course" placeholder="Enter course" />
      <label for="college">College:</label>
      <input type="text" name="college" placeholder="Enter college" />
      <label for=""> Photo:</label>
      <input type="file" name="photo" />

      <button type="submit" onclick="showAlert()">Submit</button>
    </form>
  </div>
</body>

</html>

<?php include("./include/footer.php")   ?>