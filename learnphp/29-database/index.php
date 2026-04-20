<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2 class="mb-4">Student List</h2>

    <a href="create.php" class="btn btn-primary mb-3">➕ Add Student</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM students");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['course']}</td>
        <td>
            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
        </td>
    </tr>";
        }
        ?>
    </table>

</body>

</html>