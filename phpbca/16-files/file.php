<?php

if (isset($_FILES["fileUpload"])) {

    $file = $_FILES["fileUpload"];

    $fileName = $file["name"];
    $tempName = $file["tmp_name"];

    $path = "./upload/" . basename($fileName);

    if (move_uploaded_file($tempName, $path)) {
        echo "File uploaded successfully ✅";
    } else {
        echo "Upload failed ❌";
    }

    echo $path;
}
