<?php

if (isset($_POST["name"]) && isset($_POST["pass"]) && isset($_POST["fileUpload"])) {

    $name =  $_POST["name"];
    $pass = $_POST["pass"];

    echo "User: $name";
    echo "<br>";
    echo "User password: $pass";

    if (isset($_FILES["fileUpload"])) {
        print_r($_FILES);
    }
}
