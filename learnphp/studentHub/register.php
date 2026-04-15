<?php
session_start();

// Validate POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $college = $_POST['college'];

    // FILE UPLOAD
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {

        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];

        $uploadDir = "uploads/";

        // Create folder if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $path = $uploadDir . basename($photo);

        if (move_uploaded_file($tmp, $path)) {
            $_SESSION['photo'] = $path;
        } else {
            echo "File upload failed!";
            exit();
        }
    } else {
        echo "No file selected or upload error!";
        exit();
    }

    // SESSION
    $_SESSION['name'] = $name;

    // COOKIE
    setcookie("user", $name, time() + 3600);

    // Redirect (NO echo before this)
    header("Location: dashboard.php");
    exit();
}
