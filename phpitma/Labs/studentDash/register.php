<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $roll = $_POST["roll"];
    $course = $_POST["course"];
    $college = $_POST["college"];

    // File Upload
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {

        $photoName = basename($_FILES["photo"]["name"]);
        $tmp = $_FILES["photo"]["tmp_name"];

        $uploadDir = __DIR__ . "/upload/";   // server path
        $relativePath = "upload/" . $photoName; // browser path ✅

        // Create folder if not exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move file
        if (move_uploaded_file($tmp, $uploadDir . $photoName)) {

            // Store ONLY relative path in cookie ✅
            setcookie("photo", $relativePath, time() + 3600);
        } else {
            echo "File Upload failed !!!";
            exit();
        }
    } else {
        echo "No file selected";
        exit();
    }

    // Store user in cookie
    setcookie("user", $name, time() + 3600);
    include("./include/footer.php");
    // Redirect
    header("Location: dashboard.php");
    exit();
}
