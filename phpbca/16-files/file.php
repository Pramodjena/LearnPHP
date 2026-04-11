<?php

if (isset($_FILES["fileUpload"])) {
    // print_r($_FILES);

    $fileName = $_FILES["fileUpload"];
    $path = "./upload" . basename($_FILES["name"]);
    move_uploaded_file($fileName["tmp_name"], $path) or exit("Failed");
    echo "File upload";
}
