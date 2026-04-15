<?php

// $_FILES : superglobal variable 

if (isset($_FILES["fileUpload"])) {
    echo "<pre>";
    print_r($_FILES);

    if ($_FILES["fileUpload"]["error"] != 0) {
        die("Error Code" . $_FILES["fileUpload"]["error"]);
    }

    $fileName = basename($_FILES["fileUpload"]["name"]);

    $tmpName = $_FILES["fileUpload"]["tmp_name"];

    // echo __DIR__;

    $uploadPath = __DIR__ . "/upload/" . $fileName;


    if (move_uploaded_file($tmpName, $uploadPath)) {
        echo "Upload successful !!!";
    } else {
        echo "Upload failed !!!";
    }
} else {
    echo "No records found !!";
}
