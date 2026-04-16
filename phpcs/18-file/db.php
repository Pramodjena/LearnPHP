<?php

// print_r($_FILES["fileUpload"]);

if (isset($_FILES["fileUpload"])) {
    echo "<pre>";
    print_r($_FILES);
    if ($_FILES["fileUpload"]["error"] == 0) {

        $fileName =  basename($_FILES["fileUpload"]["name"]);

        $tmpName = $_FILES["fileUpload"]["tmp_name"];

        $uploadPath = __DIR__ . "/upload/" . $fileName;

        if (move_uploaded_file($tmpName, $uploadPath)) {
            echo "File upload successful!!";
        } else {
            echo "Upload Failed!!";
        }
    } else {
        echo "No records found!!";
    }
}
