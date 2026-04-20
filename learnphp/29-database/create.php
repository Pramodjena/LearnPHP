<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2>Add Student</h2>

    <form method="POST" class="card p-4">
        <input class="form-control mb-3" type="text" name="name" placeholder="Name">
        <input class="form-control mb-3" type="email" name="email" placeholder="Email">
        <input class="form-control mb-3" type="text" name="course" placeholder="Course">
        <button class="btn btn-success">Save</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn->query("INSERT INTO students (name,email,course)
                  VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['course']}')");

        header("Location: index.php");
    }
    ?>

</body>

</html>