<?php
include("./include/nav.php");

// echo "File shared ";
// print_r($_POST);
// $name = $_REQUEST["name"];
// $pass =  $_REQUEST["pass"];
// echo "Hey $name welcome back !! <br>";

// isset : checks super global variable
// exist -> true 
// !exist -> false 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Text data :
    $name =  $_POST["name"];
    $pass =  $_POST["pass"];


    // File data :
    if (isset($_FILES["fileUpload"])) {
        echo "<pre>";
        print_r($_FILES);

        $fileName = basename($_FILES["fileUpload"]["name"]);

        $tmpName = $_FILES["fileUpload"]["tmp_name"];

        $uploadPath = __DIR__ . "/upload/" . $fileName;   

        if (move_uploaded_file($tmpName, $uploadPath)) {
            echo "File upload successful!!";
        } else {
            echo "Failed in upload!!";
        }
    }
}
