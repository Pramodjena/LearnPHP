<?php
session_start();
// echo "File has been shared";

// if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"]) && isset($_POST["roll"]) && isset($_POST["course"]) && isset($_POST["college"])) {


// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $roll = $_POST["roll"];
    $course = $_POST["course"];
    $college = $_POST["college"];

    // File Upload 
    if (isset($_FILES["photo"]) && isset($_FILES["photo"]["error"]) == 0) {
        $photo = $_FILES["photo"]["name"];
        $tmp = $_FILES["photo"]["tmp_name"];

        $uploadPath = "upload/";

        // Create folder if not exist 
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $path = $uploadPath . basename($photo);

        if (move_uploaded_file($tmp, $path)) {
            $_SESSION["photo"] = $path;
        } else {
            echo "File Upload failed !!!";
            exit();
        }
    } else {
        echo "No file selected or uploaded";
        exit();
    }


    // session set 
    $_SESSION["name"] = $name;

    // Cookie 
    setcookie("user", $name, time() + 3600);

    // Redirect 
    header("Location: dashboard.php");
    exit();
}
