<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Edit Student</h2>

    <form method="POST" class="card p-4">
        Name: <input class="form-control mb-3" type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Email: <input class="form-control mb-3" type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Course: <input class="form-control mb-3" type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>
        <button class="btn btn-warning" type="submit">Update</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("UPDATE students 
                  SET name='$name', email='$email', course='$course' 
                  WHERE id=$id");

    header("Location: index.php");
}
?>