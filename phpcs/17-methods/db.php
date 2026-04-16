<?php

// echo "Data will sent ...";

// $_GET :
// isset() : checks global variable exist or not 
// exist : true 
// !exist : false 

if (isset($_REQUEST["name"]) && isset($_REQUEST["pass"])) {
    echo "<script>
    alert('You can proceed');
    </script>";

    $name = $_POST["name"];
    $pass =  $_POST["pass"];

    echo "Username: $name <br>";
    echo "Username: $pass <br>";
} else {
    echo "Invalid inputs";
}
