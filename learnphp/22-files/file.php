<?php

// Super Global Variable in PHP ($_FILES).

// print_r($_FILES);

if (isset($_FILES["fileUpload"])) {

    echo "<pre>";
    print_r($_FILES);

    if ($_FILES["fileUpload"]["error"] != 0) {
        die("Error Code: " . $_FILES["fileUpload"]["error"]);
    }

    $fileName = basename($_FILES["fileUpload"]["name"]);
    $tmpName = $_FILES["fileUpload"]["tmp_name"];

    $uploadPath = __DIR__ . "/upload/" . $fileName;

    if (move_uploaded_file($tmpName, $uploadPath)) {
        echo "✅ Upload Success";
    } else {
        echo "❌ Upload Failed";
    }
} else {
    echo "No file received";
}
